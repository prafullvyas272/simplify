<template>
    <div class="p-6">

    <div class="space-y-6 mt-3">
        <h1 class="font-bold mb-4 text-center">Your Disc Profile Summary</h1>
    </div>

    <!-- For C Style Report -->
    <div v-if="style == 'C'">
        <!-- Content for C -->
        <div class="p-4 md:p-6">

            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">

                    <h2 class="text-xl md:text-3xl mb-4">
                        Introduction to Your Cautious Style
                    </h2>
                    <p class="mb-6">
                        Awesome! Your assessment results show that you have a
                        Cautious (C) style. This means you’re naturally
                        analytical, detail-oriented, and methodical. People with
                        a Cautious style excel at tasks that require precision
                        and focus, often thriving in structured environments. In
                        this section, we’ll dive into what makes your style
                        unique and how you can use it to your advantage.
                    </p>
                </div>
                <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Cautious (C) Style
            </h2>
            <p class="mb-4">
                As someone with a Cautious style, you likely have these standout
                traits:
            </p>

            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Analytical Thinker</strong
                    >
                    <br />
                    <br />

                    You have a talent for analysing information and making
                    well-thought-out decisions based on facts.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Detail-Oriented</strong>
                    <br />
                    <br />
                    You pay close attention to detail, ensuring that tasks are
                    completed accurately and thoroughly.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Methodical Approach</strong
                    >
                    <br />
                    <br />
                    You prefer a systematic approach to problem-solving,
                    breaking down complex tasks into manageable steps.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Logical and Objective</strong
                    >
                    <br />
                    <br />
                    You value logic and objectivity, relying on evidence and
                    reason to guide your decisions.
                </div>
            </div>

            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p class="mb-4">Here’s a look at how your DISC traits stack up:</p>
            <ul class="list-none list-inside mb-6">
                <li>
                    <strong>Circle Graph:</strong> <br />
                    A dot's distance from the edge of the circle indicates how
                    naturally inclined you are to embody the characteristics of
                    your DISC style.
                </li>

                <div class="justify-content-center relative mt-2">
                    <img
                        src="/images/pie.png"
                        alt=""
                        style="
                            min-width: 300px;
                            min-height: 300px;
                            max-width: 300px;
                            max-height: 300px;
                        "
                    />
                    <div
                        class="point absolute bg-black rounded-full"
                        style="width: 10px; height: 10px"
                        :style="`top:${y}px; left:${x}px;`"
                    ></div>
                </div>
                <li class="mt-5">
                    <strong>Score Graph:</strong> <br />
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                    This graph shows your scores for each DISC trait, helping
                    you see how they balance out.
                </li>



                <ul class="list-none list-inside text-lg text-gray-700 mt-4">
                    <li>
                        <strong>Dominant (D):</strong>
                        {{ parsedDiscScores.D }} points
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }} points
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }} points
                    </li>
                    <li>
                        <strong>Cautious (C):</strong>
                        {{ parsedDiscScores.C }} points
                    </li>
                </ul>


            </ul>
        </div>
        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4">
                These words describe your Cautious style and show how it fits
                with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For CD Style Report -->
    <div v-if="style == 'CD'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Cautious-Dominant Style
                    </h2>
                    <p class="mb-6">
                        Your assessment results show that you have a
                        Cautious-Dominant (CD) style. This means you possess a
                        unique blend of careful analysis and decisive action.
                        People with a CD style are detail-oriented, logical, and
                        focused on achieving results. In this section, we’ll
                        explore what makes your style special and how you can
                        use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Cautious-Dominant (CD) Style
            </h2>
            <p class="mb-6">
                As someone with a CD style, you likely have these standout
                traits:
            </p>

            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Analytical and Precise</strong
                    >
                    <br /><br />
                    You pay close attention to details and enjoy analysing
                    information. Your thoroughness ensures that tasks are
                    completed accurately and efficiently.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Decisive and Goal-Oriented</strong
                    >
                    <br /><br />
                    You are focused on achieving results and making decisions
                    that lead to success. Your determination and drive help you
                    accomplish your goals.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Independent and Self-Reliant</strong
                    >
                    <br /><br />
                    You prefer to work independently and rely on your own abilities to get things done. You are confident in your skills and trust your judgment.

                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Logical and Objective</strong
                    >
                    <br /><br />
                    You approach situations with logic and objectivity. You base
                    your decisions on facts and evidence, which helps you make
                    informed choices.
                </div>
            </div>

            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p class="mb-6">Here’s a look at how your DISC traits stack up:</p>
            <h4 class="font-bold mb-4">Circle Graph:</h4>
            <div class="justify-content-center relative mt-2">
                    <img
                        src="/images/pie.png"
                        alt=""
                        style="
                            min-width: 300px;
                            min-height: 300px;
                            max-width: 300px;
                            max-height: 300px;
                        "
                    />
                    <div
                        class="point absolute bg-black rounded-full"
                        style="width: 10px; height: 10px"
                        :style="`top:${y}px; left:${x}px;`"
                    ></div>
                </div>
            <ul class="list-none pl-6" style="list-style-type: circle">
                <li>
                    A dot's distance from the edge of the circle indicates how
                    naturally inclined you are to embody the characteristics of
                    your DISC style.
                </li>
            </ul>
            <h4 class="font-bold mb-4">Score Graph:</h4>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />


            <p class="font-bold mb-4">
                This graph shows your scores for each DISC trait, helping you
                see how they balance out.
            </p>

            <div class="p-4 md:p-6">
                <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
                <table
                    class="table-auto border-collapse border border-gray-300 w-full"
                >
                    <thead>
                        <tr class="">
                            <th
                                class="border border-gray-300 px-4 py-2 text-left"
                            >
                                Trait
                            </th>
                            <th
                                class="border border-gray-300 px-4 py-2 text-left"
                            >
                                Descriptive Words
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td
                                class="border font-bold border-gray-300 px-4 py-2"
                            >
                                Cautious-Dominant
                            </td>
                            <td
                                class="border font-bold border-gray-300 px-4 py-2"
                            >
                                Analytical, Precise, Decisive, Goal-oriented,
                                Independent, Logical, Objective, Self-reliant,
                                Focused, Determined
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                Dominant
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                Bold, Confident, Decisive, Leader, Assertive,
                                Competitive, Driven, Independent, Goal-oriented,
                                Risk-taker
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                Influential
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                Charismatic, Social, Persuasive, Inspiring,
                                Energetic, Optimistic, Talkative, Enthusiastic,
                                Fun-loving, Spontaneous
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                Supportive
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                Loyal, Patient, Reliable, Cooperative, Caring,
                                Friendly, Empathetic, Trustworthy, Calm, Helpful
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                Cautious
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                Analytical, Precise, Detail-oriented,
                                Systematic, Logical, Methodical, Organised,
                                Cautious, Careful, Thoughtful
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-4 font-bold">
                    These words describe your Cautious-Dominant style and show
                    how it fits with the other DISC traits.
                </p>
            </div>
        </div>
    </div>

    <!-- For CS Style Report -->
    <div v-if="style == 'CS'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                    Introduction to Your Cautious-Supportive Style
                </h2>
                <p class="">
                    Awesome! Your assessment results show that you have a
                    Cautious-Supportive (CS) style. This means you possess a
                    unique blend of careful analysis and empathy. People with a
                    CS style are detail-oriented, patient, and enjoy supporting
                    others. In this section, we’ll explore what makes your style
                    special and how you can use it to your advantage.
                </p>
            </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
             </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Cautious-Supportive (CS) Style
            </h2>
            <p class="">
                As someone with a CS style, you likely have these standout
                traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Detail-Oriented and Analytical</strong
                    >
                    <br /><br />
                    You pay close attention to details and enjoy analysing
                    information. Your thoroughness ensures that tasks are
                    completed accurately and efficiently.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Empathetic and Understanding</strong
                    >
                    <br /><br />
                    You are naturally empathetic and take the time to understand
                    others' feelings. Your ability to connect emotionally makes
                    you a trusted friend and confidant.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Patient and Supportive</strong
                    >
                    <br /><br />
                    You are patient and always willing to lend a helping hand.
                    Your supportive nature creates a positive and nurturing
                    environment for those around you.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Reliable and Trustworthy</strong
                    >
                    <br /><br />
                    You are dependable and can be counted on to follow through
                    on your commitments. People trust you to get things done
                    right.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p class="">Here’s a look at how your DISC traits stack up:</p>
            <ul class="list-none pl-6">
                <li>
                    <strong>Circle Graph:</strong>
                    <p>
                        A dot's distance from the edge of the circle indicates
                        how naturally inclined you are to embody the
                        characteristics of your DISC style.
                    </p>
                    <div class="justify-content-center relative mt-2">
                        <img
                            src="/images/pie.png"
                            alt=""
                            style="
                                min-width: 300px;
                                min-height: 300px;
                                max-width: 300px;
                                max-height: 300px;
                            "
                        />
                        <div
                            class="point absolute bg-black rounded-full"
                            style="width: 10px; height: 10px"
                            :style="`top:${y}px; left:${x}px;`"
                        ></div>
                    </div>
                </li>
                <li>
                    <strong>Score Graph:</strong>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                    <p>
                        This graph shows your scores for each DISC trait,
                        helping you see how they balance out.
                    </p>



                    <ul
                        class="list-disc list-inside text-lg text-gray-700 mt-4"
                    >
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }} points
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }} points
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }} points
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }} points
                        </li>
                    </ul>


                </li>
            </ul>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                            Cautious-Supportive
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Detail-oriented, Analytical, Empathetic,
                            Understanding, Patient, Supportive, Reliable,
                            Trustworthy, Thorough, Nurturing
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Cautious-Supportive style and show how
                it fits with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For D Style Report -->
    <div v-if="style == 'D'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">
                               Introduction to Your Dominant Style
                    </h2>
                    <p class="mb-6">
                        Awesome! Your assessment results show that you have a
                        Dominant (D) style. This means you’re naturally
                        assertive, confident, and focused on getting results.
                        People with a Dominant style are often leaders who love
                        taking on challenges and reaching their goals. In this
                        section, we’ll dive into what makes your style unique
                        and how you can use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <!-- <h2 class="text-xl md:text-3xl mb-4">Understanding DISC Styles</h2>
            <p class="mb-6">
                The DISC Assessment identifies four primary personality styles:
                Dominant, Influential, Supportive, and Cautious. Each style
                represents different ways of thinking, behaving, and interacting
                with others. Here’s a brief overview of each style:
            </p> -->
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Dominant (D) Style
            </h2>
            <p class="mb-6">
                As someone with a Dominant style, you likely have these standout
                traits:
            </p>

            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Leadership</strong>
                    <br /><br />
                    You like to take charge and lead others.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Decisiveness</strong>
                    <br /><br />
                    You’re quick to make decisions and stick to them.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Goal-Oriented</strong>
                    <br /><br />
                    You set big goals and work hard to achieve them.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Challenge-Driven</strong>
                    <br /><br />
                    You love challenges and enjoy overcoming them.
                </div>
            </div>

            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p class="mb-6">Here’s a look at how your DISC traits stack up:</p>
            <h4 class="font-bold mb-4">Circle Graph:</h4>
            <div class="justify-content-center relative mt-2">
                    <img
                        src="/images/pie.png"
                        alt=""
                        style="
                            min-width: 300px;
                            min-height: 300px;
                            max-width: 300px;
                            max-height: 300px;
                        "
                    />
                    <div
                        class="point absolute bg-black rounded-full"
                        style="width: 10px; height: 10px"
                        :style="`top:${y}px; left:${x}px;`"
                    ></div>
                </div>
            <ul class="list-none pl-6" style="list-style-type: circle">
                <li>
                    A dot's distance from the edge of the circle indicates how
                    naturally inclined you are to embody the characteristics of
                    your DISC style.
                </li>
            </ul>
            <h4 class="font-bold mb-4">Score Graph:</h4>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />


            <p class="font-bold mb-4">
                This graph shows your scores for each DISC trait, helping you
                see how they balance out.
            </p>

            <div class="p-4 md:p-6">
                <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
                <table
                    class="table-auto border-collapse border border-gray-300 w-full"
                >
                    <thead>
                        <tr class="">
                            <th
                                class="border border-gray-300 px-4 py-2 text-left"
                            >
                                Trait
                            </th>
                            <th
                                class="border border-gray-300 px-4 py-2 text-left"
                            >
                                Descriptive Words
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td
                                class="border font-bold border-gray-300 px-4 py-2"
                            >
                                Dominant
                            </td>
                            <td
                                class="border font-bold border-gray-300 px-4 py-2"
                            >
                                Bold, Confident, Decisive, Leader, Assertive,
                                Competitive, Driven, Independent, Goal-oriented,
                                Risk-taker
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                Influential
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                Charismatic, Social, Persuasive, Inspiring,
                                Energetic, Optimistic, Talkative, Enthusiastic,
                                Fun-loving, Spontaneous
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                Supportive
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                Loyal, Patient, Reliable, Cooperative, Caring,
                                Friendly, Empathetic, Trustworthy, Calm, Helpful
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                Cautious
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                Analytical, Precise, Detail-oriented,
                                Systematic, Logical, Methodical, Organised,
                                Cautious, Careful, Thoughtful
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-4 font-bold">
                    These words describe your Dominant style and show how it
                    fits with the other DISC traits.
                </p>
            </div>
        </div>
    </div>

    <!-- For DC Style Report -->
    <div v-if="style == 'DC'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Dominant-Cautious Style
                    </h2>
                    <p>
                        Awesome! Your assessment results show that you have a
                        Dominant-Cautious (DC) style. This means you possess a
                        unique blend of assertiveness and analytical thinking.
                        People with a DC style are natural leaders who approach
                        tasks with precision and a focus on results. In this
                        section, we’ll dive into what makes your style unique
                        and how you can use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Dominant-Cautious (DC) Style
            </h2>
            <p>
                As someone with a DC style, you likely have these standout
                traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Confident Leader</strong>
                    <br /><br />
                    You have a strong sense of self-assurance and are
                    comfortable taking charge in various situations. You enjoy
                    setting goals and achieving them with determination.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Analytical Thinker</strong
                    >
                    <br /><br />
                    Your ability to analyse situations and data helps you make
                    informed decisions. You focus on accuracy and detail,
                    ensuring that your plans are well thought out and executed
                    precisely.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Results-Oriented</strong>
                    <br /><br />
                    You are driven by a desire to achieve tangible results. Your
                    goal-oriented mindset pushes you to set high standards and
                    work diligently to meet them.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Detail-Focused</strong>
                    <br /><br />
                    You pay close attention to details, ensuring that all
                    aspects of a task are considered and addressed. This
                    thoroughness helps you avoid mistakes and achieve
                    high-quality outcomes.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p>Here’s a look at how your DISC traits stack up:</p>
            <div>
                <p>
                    <strong>Circle Graph:</strong>
                </p>
                <p>
                    A dot's distance from the edge of the circle indicates how
                    naturally inclined you are to embody the characteristics of
                    your DISC style.
                </p>

                <div class="justify-content-center relative mt-2">
                    <img
                        src="/images/pie.png"
                        alt=""
                        style="
                            min-width: 300px;
                            min-height: 300px;
                            max-width: 300px;
                            max-height: 300px;
                        "
                    />
                    <div
                        class="point absolute bg-black rounded-full"
                        style="width: 10px; height: 10px"
                        :style="`top:${y}px; left:${x}px;`"
                    ></div>
                </div>
            </div>
            <div>
                <p>
                    <strong>Score Graph:</strong>
                </p>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                <p>
                    This graph shows your scores for each DISC trait, helping
                    you see how they balance out.
                </p>



                <ul class="list-none list-inside text-lg text-gray-700 mt-4">
                    <li>
                        <strong>Dominant (D):</strong>
                        {{ parsedDiscScores.D }} points
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }} points
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }} points
                    </li>
                    <li>
                        <strong>Cautious (C):</strong>
                        {{ parsedDiscScores.C }} points
                    </li>
                </ul>


            </div>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                            Dominant-Cautious
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Confident, Analytical, Precise, Detail-oriented,
                            Assertive, Methodical, Goal-oriented, Systematic,
                            Decisive, Thorough
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Dominant-Cautious style and show how
                it fits with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For DI Style Report -->
    <div v-if="style == 'DI'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Dominant-Influential Style
                    </h2>
                    <p>
                        Awesome! Your assessment results show that you have a
                        Dominant-Influential (DI) style. This means you possess
                        a unique blend of assertiveness and charisma. People
                        with a DI style are natural leaders who enjoy taking on
                        challenges and inspiring others with their enthusiasm.
                        In this section, we’ll dive into what makes your style
                        unique and how you can use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Dominant-Influential (DI) Style
            </h2>
            <p>
                As someone with a DI style, you likely have these standout
                traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Confident Leader</strong>
                    <br /><br />
                    You have a strong sense of self-assurance and are
                    comfortable taking charge in various situations. You enjoy
                    setting goals and motivating others to achieve them.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Persuasive Communicator</strong
                    >
                    <br /><br />
                    Your charisma and enthusiasm make you a persuasive
                    communicator who can easily influence and inspire those
                    around you.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Results-Oriented</strong>
                    <br /><br />
                    You are driven by a desire to achieve results and often set
                    high standards for yourself and others.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Socially Engaged</strong>
                    <br /><br />
                    You enjoy being around people and thrive in social settings
                    where you can connect with others and share your ideas.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p>Here’s a look at how your DISC traits stack up:</p>
            <ul class="list-inside">
                <li>
                    <strong>Circle Graph:</strong>
                </li>
                <li>
                    A dot's distance from the edge of the circle indicates how
                    naturally inclined you are to embody the characteristics of
                    your DISC style.
                </li>

                <div class="justify-content-center relative mt-2">
                    <img
                        src="/images/pie.png"
                        alt=""
                        style="
                            min-width: 300px;
                            min-height: 300px;
                            max-width: 300px;
                            max-height: 300px;
                        "
                    />
                    <div
                        class="point absolute bg-black rounded-full"
                        style="width: 10px; height: 10px"
                        :style="`top:${y}px; left:${x}px;`"
                    ></div>
                </div>

                <li>
                    <strong>Score Graph:</strong>
                </li>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                <li>
                    This graph shows your scores for each DISC trait, helping
                    you see how they balance out.
                </li>



                <ul class="list-none list-inside text-lg text-gray-700 mt-4">
                    <li>
                        <strong>Dominant (D):</strong>
                        {{ parsedDiscScores.D }} points
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }} points
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }} points
                    </li>
                    <li>
                        <strong>Cautious (C):</strong>
                        {{ parsedDiscScores.C }} points
                    </li>
                </ul>


            </ul>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                            Dominant-Influential
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Confident, Persuasive, Charismatic, Energetic,
                            Assertive, Ambitious, Goal-oriented, Social,
                            Inspiring, Driven
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Dominant-Influential style and show
                how it fits with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For I Style Report -->
    <div v-if="style == 'I'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Influential Style
                    </h2>
                    <p>
                        Awesome! Your assessment results show that you have an
                        Influential (I) style. This means you’re naturally
                        charismatic, social, and persuasive. People with an
                        Influential style love being around others and often
                        inspire their friends with enthusiasm and energy. In
                        this section, we’ll dive into what makes your style
                        unique and how you can use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Influential (I) Style
            </h2>
            <p>
                As someone with an Influential style, you likely have these
                standout traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Charismatic</strong>
                    <br /><br />
                    You easily attract and engage people with your charming and
                    energetic personality.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Social</strong>
                    <br /><br />
                    You enjoy being around others and are often the life of the
                    party, bringing excitement to any group.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Persuasive</strong>
                    <br /><br />
                    You have a knack for influencing others and getting them
                    excited about your ideas and plans.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500">Optimistic</strong>
                    <br /><br />
                    You tend to look on the bright side and encourage others to
                    see the positive in every situation.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p>Here’s a look at how your DISC traits stack up:</p>
            <p>
                <strong>Circle Graph:</strong>
            </p>
            <p>
                A dot's distance from the edge of the circle indicates how
                naturally inclined you are to embody the characteristics of your
                DISC style.
            </p>

            <div class="justify-content-center relative mt-2">
                <img
                    src="/images/pie.png"
                    alt=""
                    style="
                        min-width: 300px;
                        min-height: 300px;
                        max-width: 300px;
                        max-height: 300px;
                    "
                />
                <div
                    class="point absolute bg-black rounded-full"
                    style="width: 10px; height: 10px"
                    :style="`top:${y}px; left:${x}px;`"
                ></div>
            </div>

            <p>
                <strong>Score Graph:</strong>
            </p>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

            <p>
                This graph shows your scores for each DISC trait, helping you
                see how they balance out.
            </p>

            <ul class="list-none list-inside text-lg text-gray-700 mt-4">
                <li>
                    <strong>Dominant (D):</strong>
                    {{ parsedDiscScores.D }} points
                </li>
                <li>
                    <strong>Influential (I):</strong>
                    {{ parsedDiscScores.I }} points
                </li>
                <li>
                    <strong>Supportive (S):</strong>
                    {{ parsedDiscScores.S }} points
                </li>
                <li>
                    <strong>Cautious (C):</strong>
                    {{ parsedDiscScores.C }} points
                </li>
            </ul>


        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Influential style and show how it fits
                with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For ID Style Report -->
    <div v-if="style == 'ID'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Influential-Dominant Style
                    </h2>
                    <p class="">
                        Awesome! Your assessment results show that you have an
                        Influential-Dominant (ID) style. This means you possess
                        a unique blend of social charisma and assertive
                        leadership. People with an ID style are energetic,
                        persuasive, and driven to achieve their goals. In this
                        section, we’ll explore what makes your style special and
                        how you can use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Influential-Dominant (ID) Style
            </h2>
            <p class="">
                As someone with an ID style, you likely have these standout
                traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Charismatic Leader</strong
                    >
                    <br />
                    <br />
                    You have a natural ability to lead and inspire others with
                    your enthusiasm and confidence. People are drawn to your
                    positive energy and persuasive communication.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Energetic and Driven</strong
                    >
                    <br />
                    <br />
                    You are highly motivated and always on the move. Your drive
                    to succeed pushes you to take on challenges and achieve high
                    standards.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Persuasive Communicator</strong
                    >
                    <br />
                    <br />
                    You are skilled at convincing others and influencing their
                    opinions. Your persuasive nature helps you rally support and
                    build strong relationships.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Goal-Oriented and Decisive</strong
                    >
                    <br />
                    <br />
                    You set ambitious goals for yourself and make decisions
                    quickly. Your focus on achieving results keeps you motivated
                    and determined.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p class="">Here’s a look at how your DISC traits stack up:</p>
            <div>
                <p>
                    <strong>Circle Graph:</strong>
                </p>
                <p>
                    A dot's distance from the edge of the circle indicates how
                    naturally inclined you are to embody the characteristics of
                    your DISC style.
                </p>
                <div class="justify-content-center relative mt-2">
                    <img
                        src="/images/pie.png"
                        alt=""
                        style="
                            min-width: 300px;
                            min-height: 300px;
                            max-width: 300px;
                            max-height: 300px;
                        "
                    />
                    <div
                        class="point absolute bg-black rounded-full"
                        style="width: 10px; height: 10px"
                        :style="`top:${y}px; left:${x}px;`"
                    ></div>
                </div>
            </div>
            <div>
                <p>
                    <strong>Score Graph:</strong>
                </p>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                <p>
                    This graph shows your scores for each DISC trait, helping
                    you see how they balance out.
                </p>



                <ul class="list-none list-inside text-lg text-gray-700 mt-4">
                    <li>
                        <strong>Dominant (D):</strong>
                        {{ parsedDiscScores.D }} points
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }} points
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }} points
                    </li>
                    <li>
                        <strong>Cautious (C):</strong>
                        {{ parsedDiscScores.C }} points
                    </li>
                </ul>


            </div>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                            Influential-Dominant
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Charismatic, Energetic, Persuasive, Goal-oriented,
                            Confident, Driven, Motivating, Inspiring, Assertive,
                            Bold
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Influential-Dominant style and show
                how it fits with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For IS Style Report -->
    <div v-if="style == 'IS'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Influential-Supportive Style
                    </h2>
                    <p class="mb-4">
                        Awesome! Your assessment results show that you have an
                        Influential-Supportive (IS) style. This means you
                        possess a unique blend of social charisma and a
                        cooperative nature. People with an IS style are great at
                        building relationships and creating harmonious
                        environments. In this section, we’ll dive into what
                        makes your style unique and how you can use it to your
                        advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Influential-Supportive (IS) Style
            </h2>
            <p class="mb-4">
                As someone with an Influential-Supportive style, you likely have
                these standout traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Charismatic Communicator</strong
                    >
                    <br />
                    <br />
                    You have a natural ability to engage others with your
                    enthusiasm and positivity. You enjoy social interactions and
                    easily make friends.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Empathetic and Supportive</strong
                    >
                    <br />
                    <br />
                    You are deeply empathetic and enjoy helping others. Your
                    supportive nature makes you a trusted friend and teammate.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Collaborative Team Player</strong
                    >
                    <br />
                    <br />
                    You excel in team settings where cooperation and mutual
                    support are valued. You work well with others and strive to
                    create a harmonious environment.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Optimistic and Encouraging</strong
                    >
                    <br />
                    <br />
                    You maintain a positive outlook and encourage those around
                    you. Your optimism helps boost morale and motivate others to
                    do their best.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p class="mb-4">Here’s a look at how your DISC traits stack up:</p>
            <ul class="list-none pl-6">
                <li>
                    <strong>Circle Graph:</strong>
                </li>
                <ul class="list-none pl-6" style="list-style-type: circle">
                    <li>
                        A dot's distance from the edge of the circle indicates
                        how naturally inclined you are to embody the
                        characteristics of your DISC style.
                    </li>

                    <div class="justify-content-center relative mt-2">
                        <img
                            src="/images/pie.png"
                            alt=""
                            style="
                                min-width: 300px;
                                min-height: 300px;
                                max-width: 300px;
                                max-height: 300px;
                            "
                        />
                        <div
                            class="point absolute bg-black rounded-full"
                            style="width: 10px; height: 10px"
                            :style="`top:${y}px; left:${x}px;`"
                        ></div>
                    </div>
                </ul>
                <li>
                    <strong>Score Graph:</strong>
                </li>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                <ul class="list-none pl-6" style="list-style-type: circle">
                    <li>
                        This graph shows your scores for each DISC trait,
                        helping you see how they balance out.
                    </li>



                    <ul
                        class="list-disc list-inside text-lg text-gray-700 mt-4"
                    >
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }} points
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }} points
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }} points
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }} points
                        </li>
                    </ul>


                </ul>
            </ul>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                            Influential-Supportive
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Charismatic, Empathetic, Cooperative, Positive,
                            Friendly, Supportive, Collaborative, Enthusiastic,
                            Encouraging, Social
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Influential-Supportive style and show
                how it fits with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For S Style Report -->
    <div v-if="style == 'S'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Supportive Style
                    </h2>
                    <p>
                        Awesome! Your assessment results show that you have a
                        Supportive (S) style. This means you’re naturally
                        patient, reliable, and cooperative. People with a
                        Supportive style excel at creating harmony and are often
                        seen as trustworthy team players. In this section, we’ll
                        dive into what makes your style unique and how you can
                        use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Supportive (S) Style
            </h2>
            <p>
                As someone with a Supportive style, you likely have these
                standout traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Loyal and Trustworthy</strong
                    >
                    <br />
                    <br />
                    You are a dependable friend who others can count on in times
                    of need.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Patient and Understanding</strong
                    >
                    <br />
                    <br />
                    You take the time to listen and understand others, making
                    you a great mediator in conflicts.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Cooperative and Team-Oriented</strong
                    >
                    <br />
                    <br />
                    You enjoy working with others and are excellent at nurturing
                    team spirit.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Caring and Empathetic</strong
                    >
                    <br />
                    <br />
                    You naturally care about others’ feelings and are always
                    ready to lend a helping hand.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p>Here’s a look at how your DISC traits stack up:</p>
            <ul class="list-inside">
                <li>
                    <strong>Circle Graph:</strong>

                    <ul class="list-none pl-6" style="list-style-type: circle">
                        A dot's distance from the edge of the circle indicates
                        how naturally inclined you are to embody the
                        characteristics of your DISC style.
                    </ul>
                    <div class="justify-content-center relative mt-2">
                        <img
                            src="/images/pie.png"
                            alt=""
                            style="
                                min-width: 300px;
                                min-height: 300px;
                                max-width: 300px;
                                max-height: 300px;
                            "
                        />
                        <div
                            class="point absolute bg-black rounded-full"
                            style="width: 10px; height: 10px"
                            :style="`top:${y}px; left:${x}px;`"
                        ></div>
                    </div>
                </li>
                <li>
                    <strong>Score Graph:</strong>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                    <ul class="list-none pl-6" style="list-style-type: circle">
                        This graph shows your scores for each DISC trait,
                        helping you see how they balance out.
                    </ul>



                    <ul
                        class="list-disc list-inside text-lg text-gray-700 mt-4"
                    >
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }} points
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }} points
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }} points
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }} points
                        </li>
                    </ul>


                </li>
            </ul>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Supportive style and show how it fits
                with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For SC Style Report -->
    <div v-if="style == 'SC'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Supportive-Cautious Style
                    </h2>
                    <p>
                        Awesome! Your assessment results show that you have a
                        Supportive-Cautious (SC) style. This means you possess a
                        unique blend of reliability and careful planning. People
                        with an SC style are patient, detail-oriented, and
                        supportive. In this section, we’ll explore what makes
                        your style special and how you can use it to your
                        advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Supportive-Cautious (SC) Style
            </h2>
            <p>
                As someone with an SC style, you likely have these standout
                traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Reliable and Steady</strong
                    >
                    <br />
                    <br />
                    You are dependable and can be counted on to follow through
                    on your commitments. Your consistent and steady nature makes
                    you a trusted friend and team member.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Detail-Oriented and Thorough</strong
                    >
                    <br />
                    <br />
                    You pay close attention to details and ensure that tasks are
                    completed accurately. Your meticulous approach helps you
                    achieve high-quality results.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Supportive and Cooperative</strong
                    >
                    <br />
                    <br />
                    You enjoy helping others and ensuring that everyone feels
                    supported and included. Your cooperative nature promotes a
                    harmonious and collaborative environment.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Patient and Understanding</strong
                    >
                    <br />
                    <br />
                    You are patient and take the time to understand others'
                    perspectives. Your empathetic nature helps you build strong,
                    supportive relationships.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p>Here’s a look at how your DISC traits stack up:</p>
            <ul class="list-inside">
                <li>
                    <strong>Circle Graph:</strong>

                    <ul class="list-none pl-6" style="list-style-type: circle">
                        A dot's distance from the edge of the circle indicates
                        how naturally inclined you are to embody the
                        characteristics of your DISC style.
                    </ul>
                    <div class="justify-content-center relative mt-2">
                        <img
                            src="/images/pie.png"
                            alt=""
                            style="
                                min-width: 300px;
                                min-height: 300px;
                                max-width: 300px;
                                max-height: 300px;
                            "
                        />
                        <div
                            class="point absolute bg-black rounded-full"
                            style="width: 10px; height: 10px"
                            :style="`top:${y}px; left:${x}px;`"
                        ></div>
                    </div>
                </li>
                <li>
                    <strong>Score Graph:</strong>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                    <ul class="list-none pl-6" style="list-style-type: circle">
                        This graph shows your scores for each DISC trait,
                        helping you see how they balance out.
                    </ul>



                    <ul
                        class="list-disc list-inside text-lg text-gray-700 mt-4"
                    >
                        <li>
                            <strong>Dominant (D):</strong>
                            {{ parsedDiscScores.D }} points
                        </li>
                        <li>
                            <strong>Influential (I):</strong>
                            {{ parsedDiscScores.I }} points
                        </li>
                        <li>
                            <strong>Supportive (S):</strong>
                            {{ parsedDiscScores.S }} points
                        </li>
                        <li>
                            <strong>Cautious (C):</strong>
                            {{ parsedDiscScores.C }} points
                        </li>
                    </ul>


                </li>
            </ul>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                            Supportive-Cautious
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Reliable, Steady, Detail-oriented, Thorough,
                            Supportive, Cooperative, Patient, Understanding,
                            Meticulous, Consistent
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Supportive-Cautious style and show how
                it fits with the other DISC traits.
            </p>
        </div>
    </div>

    <!-- For SI Style Report -->
    <div v-if="style == 'SI'">
        <div class="p-4 md:p-6">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="w-full md:w-1/2">
                    <h2 class="text-xl md:text-3xl mb-4">

                        Introduction to Your Supportive-Influential Style
                    </h2>
                    <p>
                        Awesome! Your assessment results show that you have a
                        Supportive-Influential (SI) style. This means you
                        possess a unique blend of empathy and sociability.
                        People with an SI style are patient, understanding, and
                        enjoy engaging with others. In this section, we’ll
                        explore what makes your style special and how you can
                        use it to your advantage.
                    </p>
                </div>    <div class="w-full md:w-1/2 hidden md:block">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-48 md:w-64 h-auto object-contain"
                            :src="'/images/reports-images/TeensDiscReportStyleImages/Yourdiscprofilesummary/3.svg'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Key Characteristics of the Supportive-Influential (SI) Style
            </h2>
            <p>
                As someone with an SI style, you likely have these standout
                traits:
            </p>
            <div class="grid-container gap-10 justify-content-center mb-6">
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Empathetic and Understanding</strong
                    >
                    <br />
                    <br />
                    You are naturally empathetic and take the time to understand
                    others' feelings. Your ability to connect emotionally makes
                    you a trusted friend and confidant.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Social and Engaging</strong
                    >
                    <br />
                    <br />
                    You enjoy being around people and thrive in social settings.
                    Your friendly and engaging nature helps you build strong
                    relationships.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Patient and Supportive</strong
                    >
                    <br />
                    <br />
                    You are patient and always willing to lend a helping hand.
                    Your supportive nature creates a positive and nurturing
                    environment for those around you.
                </div>
                <div class="grid-item gradient-border">
                    <strong class="mb-2 text-blue-500"
                        >Collaborative and Cooperative</strong
                    >
                    <br />
                    <br />
                    You work well in teams and value collaboration. Your
                    cooperative attitude ensures that everyone feels included
                    and respected.
                </div>
            </div>
        </div>

        <div class="p-6 pb-0">
            <h2 class="text-xl md:text-3xl mb-4">
                Graphical Representation of Your Scores
            </h2>
            <p>Here’s a look at how your DISC traits stack up:</p>
            <ul class="list-inside">
                <li>
                    <strong>Circle Graph:</strong>

                    <ul class="list-none pl-6" style="list-style-type: circle">
                        A dot's distance from the edge of the circle indicates
                        how naturally inclined you are to embody the
                        characteristics of your DISC style.
                    </ul>

                    <div class="justify-content-center relative mt-2">
                        <img
                            src="/images/pie.png"
                            alt=""
                            style="
                                min-width: 300px;
                                min-height: 300px;
                                max-width: 300px;
                                max-height: 300px;
                            "
                        />
                        <div
                            class="point absolute bg-black rounded-full"
                            style="width: 10px; height: 10px"
                            :style="`top:${y}px; left:${x}px;`"
                        ></div>
                    </div>
                </li>
            </ul>

            <ul class="list-inside">
                <li>
                    <strong>Score Graph:</strong>
            <Chart type="bar" :data="chartDataBar" :options="chartOptionsBar" />

                    <ul class="list-none pl-6" style="list-style-type: circle">
                        This graph shows your scores for each DISC trait,
                        helping you see how they balance out.
                    </ul>
                </li>


                <ul class="list-none list-inside text-lg text-gray-700 mt-4">
                    <li>
                        <strong>Dominant (D):</strong>
                        {{ parsedDiscScores.D }} points
                    </li>
                    <li>
                        <strong>Influential (I):</strong>
                        {{ parsedDiscScores.I }} points
                    </li>
                    <li>
                        <strong>Supportive (S):</strong>
                        {{ parsedDiscScores.S }} points
                    </li>
                    <li>
                        <strong>Cautious (C):</strong>
                        {{ parsedDiscScores.C }} points
                    </li>
                </ul>


            </ul>
        </div>

        <div class="p-4 md:p-6">
            <h2 class="text-xl md:text-3xl mb-4">Table of Descriptive Words</h2>
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
                            Supportive-Influential
                        </td>
                        <td class="border font-bold border-gray-300 px-4 py-2">
                            Empathetic, Understanding, Social, Engaging,
                            Patient, Supportive, Friendly, Cooperative,
                            Relational, Encouraging
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Dominant
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Bold, Confident, Decisive, Leader, Assertive,
                            Competitive, Driven, Independent, Goal-oriented,
                            Risk-taker
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Influential
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Charismatic, Social, Persuasive, Inspiring,
                            Energetic, Optimistic, Talkative, Enthusiastic,
                            Fun-loving, Spontaneous
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Supportive
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Loyal, Patient, Reliable, Cooperative, Caring,
                            Friendly, Empathetic, Trustworthy, Calm, Helpful
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            Cautious
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            Analytical, Precise, Detail-oriented, Systematic,
                            Logical, Methodical, Organised, Cautious, Careful,
                            Thoughtful
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-4 font-bold">
                These words describe your Supportive-Influential style and show
                how it fits with the other DISC traits.
            </p>
        </div>
    </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";
import Chart from "primevue/chart";
export default {
    name: "DiscProfileSummary",
    layout: AssessmentTypes,
    components: {
        Chart,
    },
    props: {
        style: String,
        childName: String,
        image: String,
        discScores: Object,
    },
    data() {
        return {
            parsedDiscScores: this.discScores
                ? this.discScores
                : { C: 0, D: 0, I: 0, S: 0 },
            chartOptions: null,
            x: 0,
            y: 0,
            chart_data: {
                labels: ['D', 'I', 'S', 'C'],
                datasets: [
                    {
                        label: 'DISC Score',
                        data: [],
                        backgroundColor: ['rgba(249, 115, 22, 0.2)', 'rgba(6, 182, 212, 0.2)', 'rgb(107, 114, 128, 0.2)', 'rgba(139, 92, 246, 0.2)'],
                        borderColor: ['rgb(249, 115, 22)', 'rgb(6, 182, 212)', 'rgb(107, 114, 128)', 'rgb(139, 92, 246)'],
                        borderWidth: 1
                    }
                ]
            },


            chartOptionsBar: {
                scales: {
                    y: {
                        ticks: {
                            stepSize:2,
                        },
                        suggestedMax: 50,
                    }
                }
            },
            chartDataBar: {
                labels: ['D', 'I', 'S', 'C'],
                datasets: [
                    {
                        label: 'DISC Score',
                        data: [],
                        backgroundColor: ['rgba(249, 115, 22, 0.2)', 'rgba(6, 182, 212, 0.2)', 'rgb(107, 114, 128, 0.2)', 'rgba(139, 92, 246, 0.2)'],
                        borderColor: ['rgb(249, 115, 22)', 'rgb(6, 182, 212)', 'rgb(107, 114, 128)', 'rgb(139, 92, 246)'],
                        borderWidth: 1
                    }
                ]
            },
        };
    },
    mounted() {
        this.chartData = this.setChartData();
        this.chartOptions = this.setChartOptions();
        this.chartData.datasets[0].data = this.discScores;

        const data = JSON.parse(this.discScores);
        this.chartDataBar.datasets[0].data = [data.D, data.I, data.S, data.C];
        switch (this.style) {
            case "C":
                this.x = 60;
                this.y = 220;
                break;
            case "CD":
                this.x = 60;
                this.y = 170;
                break;
            case "DC":
                this.x = 60;
                this.y = 120;
                break;
            case "D":
                this.x = 60;
                this.y = 65;
                break;

            case "S":
                this.x = 230;
                this.y = 220;
                break;
            case "SI":
                this.x = 230;
                this.y = 170;
                break;
            case "IS":
                this.x = 230;
                this.y = 120;
                break;
            case "I":
                this.x = 230;
                this.y = 65;
                break;

            case "CS":
                this.x = 120;
                this.y = 220;
                break;
            case "SC":
                this.x = 165;
                this.y = 220;
                break;

            case "DI":
                this.x = 120;
                this.y = 50;
                break;
            case "ID":
                this.x = 170;
                this.y = 50;
                break;
        }
    },
    methods: {
        setChartData() {
            return {
                labels: ["D", "I", "S", "C"],
                datasets: [
                    {
                        label: "Score",
                        data: Object.values(JSON.parse(this.discScores)),
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
            };
        },
        setChartOptions() {
            const documentStyle = getComputedStyle(document.documentElement);
            const textColor = documentStyle.getPropertyValue("--p-text-color");
            const textColorSecondary = documentStyle.getPropertyValue(
                "--p-text-muted-color"
            );
            const surfaceBorder = documentStyle.getPropertyValue(
                "--p-content-border-color"
            );

            return {
                plugins: {
                    legend: {
                        labels: {
                            color: textColor,
                        },
                    },
                },
                scales: {
                    x: {
                        ticks: {
                            color: textColorSecondary,
                        },
                        grid: {
                            color: surfaceBorder,
                        },
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: textColorSecondary,
                        },
                        grid: {
                            color: surfaceBorder,
                        },
                    },
                },
            };
        },
    },
    watch: {
        discScores: {
            immediate: true,
            handler(newValue) {
                this.parsedDiscScores = JSON.parse(
                    newValue ? newValue : { C: 0, D: 0, I: 0, S: 0 }
                );
                console.log("----", this.parsedDiscScores);
            },
        },
    }

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

.grid-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 columns */
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
    background-color: rgb(220 252 231 );
    /* Green */
}
ul > li {
    margin-top: 17px;
}

ul {
    padding: 0% !important;
}


/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    strong{
        font-size: 1rem !important;
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

    h2,
    h3,
    h4 {
        font-size: 1.25rem !important;
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
