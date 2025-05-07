<template>
    <div class="p-4 md:p-6">

        <div class="container mx-auto ">
            <h1 class="font-bold mb-4 text-center">Appendices</h1>
        </div>
        <!-- <div class="flex justify-center items-center mb-4">
        <img class="w-96 h-auto object-contain" :src="'/images/reports-svg-images/Page 44.svg'" alt="" />
    </div> -->
        <div v-if="style == 'C'" class="container mx-auto ">

            <h2 class="text-3xl font-bold">Reading Others:</h2>
            <p class="mb-4">
                Here’s a quick chart to help you identify a person's primary style:
            </p>

            <div class="my-4 flex justify-center items-center">
                <img class="w-30 h-auto bg-white object-contain"
                    @error="$event.target.src = '/images/default/placeholder.png'"
                    :src="'/images/reports-images/Appendices.png'" alt="" />
            </div>


            <table class="table-auto w-full border-collapse mb-4">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Style</th>
                        <th class="border px-4 py-2">Characteristics</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Dominant (D)</td>
                        <td class="border px-4 py-2">
                            Confidence, Assertiveness, Leadership
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Influential (I)</td>
                        <td class="border px-4 py-2">
                            Enthusiasm, Sociability, Communication Skills
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Supportive (S)</td>
                        <td class="border px-4 py-2">
                            Reliability, Cooperation, Stability
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Cautious (C)</td>
                        <td class="border px-4 py-2">
                            Organisation, Attention to Detail, Precision
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Additional Resources Section -->
            <div class=" rounded-lg">
                <h2 class="text-3xl font-bold">
                    Additional Resources
                </h2>
                <div class="row">
                    <div class="col-6">
                        <p class="mb-4">Links and References for Further Reading:</p>
                        <p>
                            <strong>
                                Books on DISC for Children:

                            </strong>
                        </p>
                        <ul class="list-none pl-6 space-y-2">
                            <li>
                                <strong>"The Adventures of the1 DISC Zoo" by Crystal Parker and
                                    David S. Rutherford</strong>
                                <br />
                                A fun and engaging book that introduces children to the DISC
                                personality styles through the adventures of zoo animals.
                            </li>
                            <li>
                                <strong>"DISC for Kids: Unlocking the Secrets to Understanding
                                    Your Child's Personality" by Carol G. Kauffman</strong>
                                <br />
                                A comprehensive guide for parents and teachers to understand
                                and apply DISC principles to support children’s development.
                            </li>

                            <li>
                                <strong>"Personality Plus for Parents: Understanding What Makes
                                    Your Child Tick" by Florence Littauer</strong>
                                <br />
                                A book that explores different personality types, including
                                DISC, and offers practical advice for parents.
                            </li>
                            <li>
                                <strong>"Raising Leaders: How to Encourage and Mentor Your
                                    Kids" by Tim Elmore</strong>
                                <br />
                                Focuses on developing leadership skills in children,
                                including understanding their DISC styles.
                            </li>
                        </ul>

                    </div>
                    <div class="col-6">
                        <div class="my-4 mt-5" style="margin-top: 100px;">
                            <div class="flex justify-center items-center mb-4">
                                <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 46.svg'"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For CD Style Type -->
        <div id="CD" v-if="style == 'CD'">
            <div class=" rounded-lg">
                <h2 class="text-3xl font-bold">
                    Reading Others
                </h2>

                <p class=" mb-4">
                    Here’s a quick chart to help you identify a person’s primary
                    style:
                </p>

                <div class="mb-6">
                    <!-- Insert chart or any visual representation here -->
                </div>
            </div>

            <div class="my-4 flex justify-center items-center">
                <img class="w-30 h-auto bg-white object-contain"
                    @error="$event.target.src = '/images/default/placeholder.png'"
                    :src="'/images/reports-images/Appendices.png'" alt="" />
            </div>

            <table class="table-auto w-full border-collapse mb-4">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Style</th>
                        <th class="border px-4 py-2">Characteristics</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Dominant (D)</td>
                        <td class="border px-4 py-2">
                            Confidence, Assertiveness, Leadership
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Influential (I)</td>
                        <td class="border px-4 py-2">
                            Enthusiasm, Sociability, Communication Skills
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Supportive (S)</td>
                        <td class="border px-4 py-2">
                            Reliability, Cooperation, Stability
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Cautious (C)</td>
                        <td class="border px-4 py-2">
                            Organisation, Attention to Detail, Precision
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class=" rounded-lg mt-6">
                <h2 class="text-3xl font-bold">
                    Additional Resources
                </h2>

                <p class=" mb-4">
                    Links and References for Further Reading:
                </p>

                <div class="space-y-4">
                    <div>
                        <strong>
                            Books on DISC for Children:

                        </strong>
                        <ul class="list-none pl-6 ">
                            <li>
                                <span class="font-semibold">"The Adventures of the DISC Zoo" by Crystal
                                    Parker and David S. Rutherford</span>
                                - A fun and engaging book that introduces children
                                to the DISC personality styles through the
                                adventures of zoo animals.
                            </li>
                            <li>
                                <span class="font-semibold">"DISC for Kids: Unlocking the Secrets to
                                    Understanding Your Child's Personality" by Carol
                                    G. Kauffman</span>
                                - A comprehensive guide for parents and teachers to
                                understand and apply DISC principles to support
                                children’s development.
                            </li>
                            <li>
                                <span class="font-semibold">"Personality Plus for Parents: Understanding
                                    What Makes Your Child Tick" by Florence
                                    Littauer</span>
                                - A book that explores different personality types,
                                including DISC, and offers practical advice for
                                parents.
                            </li>
                            <li>
                                <span class="font-semibold">"Raising Leaders: How to Encourage and Mentor
                                    Your Kids" by Tim Elmore</span>
                                - Focuses on developing leadership skills in
                                children, including understanding their DISC styles.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- For CS Style Type -->
        <div id="CS" v-if="style == 'CS'">
            <div class="">
                <h2 class="text-3xl font-bold mb-4">
                    Reading Others
                </h2>

                <div class="mb-6">

                    <p class="text-gray-700">
                        Use this chart to identify a person's primary style:
                    </p>
                    <div class="my-4 flex justify-center items-center">
                        <img class="w-30 h-auto bg-white object-contain"
                            @error="$event.target.src = '/images/default/placeholder.png'"
                            :src="'/images/reports-images/Appendices.png'" alt="" />
                    </div>
                    <!-- Chart container, add details or table here if needed -->
                </div>

                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class=" rounded-lg mb-6">
                    <h2 class="text-3xl font-bold">Additional Resources</h2>
                    <p class="text-gray-700 mb-4">
                        Links and references for further reading:
                    </p>
                    <p>
                        <strong>
                            Books on DISC for Children:

                        </strong>
                    </p>
                    <ul class="space-y-3">
                        <li>
                            <strong>
                                The Adventures of the DISC Zoo" by Crystal Parker and David S. Rutherford

                            </strong>
                            <p class="ml-8">
                                A fun and engaging book that introduces children to the DISC personality styles through
                                the
                                adventures of zoo animals.

                            </p>
                        </li>
                        <li>
                            <strong>
                                DISC for Kids: Unlocking the Secrets to Understanding Your Child's Personality" by Carol
                                G.
                                Kauffman
                            </strong>
                            <p class="ml-8">
                                A comprehensive guide for parents and teachers to understand and apply DISC principles
                                to
                                support children’s development.

                            </p>
                        </li>
                        <li>
                            <strong>
                                Personality Plus for Parents: Understanding What Makes Your Child Tick" by Florence
                                Littauer

                            </strong>
                            <p class="ml-8">
                                A book that explores different personality types, including DISC, and offers practical
                                advice for parents.

                            </p>

                        </li>
                        <li>
                            <strong>
                                Raising Leaders: How to Encourage and Mentor Your Kids" by Tim Elmore

                            </strong>
                            <p class="ml-8">
                                Focuses on developing leadership skills in children, including understanding their DISC
                                styles.



                            </p>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For D Style Type -->
        <div id="D" v-if="style == 'D'">
            <div class="container mx-auto px-4 py-6">
                <h2 class="text-3xl font-bold mb-4">Reading Others</h2>

                <section class="mb-6">
                    <h2 class="text-3xl font-bold">
                        Chart to Identify a Person’s Primary Style
                    </h2>
                    <div class="my-4 flex justify-center items-center">
                        <img class="w-30 h-auto bg-white object-contain"
                            @error="$event.target.src = '/images/default/placeholder.png'"
                            :src="'/images/reports-images/Appendices.png'" alt="" />
                    </div>
                    <!-- Add your chart content here, using Tailwind classes for styling -->
                    <table class="table-auto w-full border-collapse mb-4">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Style</th>
                                <th class="border px-4 py-2">Characteristics</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Dominant (D)</td>
                                <td class="border px-4 py-2">
                                    Confidence, Assertiveness, Leadership
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Influential (I)</td>
                                <td class="border px-4 py-2">
                                    Enthusiasm, Sociability, Communication Skills
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Supportive (S)</td>
                                <td class="border px-4 py-2">
                                    Reliability, Cooperation, Stability
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Cautious (C)</td>
                                <td class="border px-4 py-2">
                                    Organisation, Attention to Detail, Precision
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>



                <section class="mt-8 ">
                    <h2 class="text-3xl font-bold">Additional Resources</h2>
                    <p class="mb-4">Links and References for Further Reading:</p>
                    <ul class="list-none pl-5 space-y-2">
                        <li>
                            <strong>"The Adventures of the DISC Zoo" by Crystal Parker
                                and David S. Rutherford:</strong>
                            A fun and engaging book that introduces children to the
                            DISC personality styles through the adventures of zoo
                            animals.
                        </li>
                        <li>
                            <strong>"DISC for Kids: Unlocking the Secrets to
                                Understanding Your Child's Personality" by Carol G.
                                Kauffman:</strong>
                            A comprehensive guide for parents and teachers to
                            understand and apply DISC principles to support
                            children’s development.
                        </li>
                        <li>
                            <strong>"Personality Plus for Parents: Understanding What
                                Makes Your Child Tick" by Florence Littauer:</strong>
                            A book that explores different personality types,
                            including DISC, and offers practical advice for parents.
                        </li>
                        <li>
                            <strong>"Raising Leaders: How to Encourage and Mentor Your
                                Kids" by Tim Elmore:</strong>
                            Focuses on developing leadership skills in children,
                            including understanding their DISC styles.
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <!-- For DC Style Type -->
        <div id="DC" v-if="style == 'DC'">
            <div class=" space-y-6">
                <!-- Reading Others Section -->
                <div>
                    <h2 class="text-3xl font-bold">
                        Reading Others:
                    </h2>
                    <p class="text-gray-700">
                        Here’s a quick chart to help you identify a person's primary
                        style:
                    </p>
                    <div class="my-4 flex justify-center items-center">
                        <img class="w-30 h-auto bg-white object-contain"
                            @error="$event.target.src = '/images/default/placeholder.png'"
                            :src="'/images/reports-images/Appendices.png'" alt="" />
                    </div>
                    <!-- Add chart content if applicable -->
                </div>

                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Additional Resources Section -->
                <div class=" rounded-lg mb-6">
                    <h2 class="text-3xl font-bold">
                        Additional Resources
                    </h2>
                    <p class="">
                        <strong>
                            Links and References for Further Reading:
                        </strong>

                    </p>
                    <p>
                        <strong>
                            Books on DISC for Children:

                        </strong>
                    </p>
                    <ul class="list-none list-inside space-y-2 text-gray-700">
                        <li>
                            <strong>"The Adventures of the DISC Zoo" by
                                Crystal Parker and David S. Rutherford:</strong> A fun and
                            engaging book that introduces children to the DISC
                            personality styles through the adventures of zoo
                            animals.
                        </li>
                        <li>
                            <strong>"DISC for Kids: Unlocking the Secrets to
                                Understanding Your Child's Personality"
                                by Carol G. Kauffman: </strong> A comprehensive guide for parents
                            and teachers to understand and apply DISC principles to
                            support children’s development.
                        </li>
                        <li>
                            <strong>"Personality Plus for Parents: Understanding What
                                Makes Your Child Tick"
                                by Florence Littauer: </strong> A book that explores different
                            personality types, including DISC, and offers practical
                            advice for parents.
                        </li>
                        <li>
                            <strong>"Raising Leaders: How to Encourage and Mentor Your
                                Kids"
                                by Tim Elmore: </strong> Focuses on developing leadership skills
                            in children, including understanding their DISC styles.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For DI Style Type -->
        <div id="DI" v-if="style == 'DI'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold">Reading Others</h2>
                <p class="text-base">
                    Here’s a quick chart to help you identify a person's primary
                    style:
                </p>


                <div class="my-4 flex justify-center items-center">
                    <img class="w-30 h-auto bg-white object-contain"
                        @error="$event.target.src = '/images/default/placeholder.png'"
                        :src="'/images/reports-images/Appendices.png'" alt="" />
                </div>

                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="p=6">
                    <h3 class="text-3xl font-bold">Additional Resources</h3>
                    <p class="text-base">
                        <strong>Links and References for Further Reading:</strong>
                    </p>

                    <ul class="list-none pl-5 space-y-4">
                        <li>
                            <strong>Books on DISC for Children:</strong>
                            <ul class="list-inside space-y-3">
                                <li>
                                    <strong>"The Adventures of the DISC Zoo"</strong>
                                    by Crystal Parker and David S. Rutherford
                                    <p class="text-sm ">
                                        A fun and engaging book that introduces
                                        children to the DISC personality styles
                                        through the adventures of zoo animals.
                                    </p>
                                </li>
                                <li>
                                    <strong>"DISC for Kids: Unlocking the Secrets to
                                        Understanding Your Child's
                                        Personality"</strong>
                                    by Carol G. Kauffman
                                    <p class="text-sm ">
                                        A comprehensive guide for parents and
                                        teachers to understand and apply DISC
                                        principles to support children’s
                                        development.
                                    </p>
                                </li>
                                <li>
                                    <strong>"Personality Plus for Parents:
                                        Understanding What Makes Your Child
                                        Tick"</strong>
                                    by Florence Littauer
                                    <p class="text-sm ">
                                        A book that explores different personality
                                        types, including DISC, and offers practical
                                        advice for parents.
                                    </p>
                                </li>
                                <li>
                                    <strong>"Raising Leaders: How to Encourage and
                                        Mentor Your Kids"</strong>
                                    by Tim Elmore
                                    <p class="text-sm ">
                                        Focuses on developing leadership skills in
                                        children, including understanding their DISC
                                        styles.
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For I Style Type -->
        <div id="I" v-if="style == 'I'">
            <div class="mt-10">
                <h2 class="text-3xl font-bold">Reading Others</h2>
                <div class="mt-6">
                    <p class="text-lg text-gray-700">
                        Here’s a quick chart to help you identify a person’s primary
                        style:
                    </p>
                    <div class="my-4 flex justify-center items-center">
                        <img class="w-30 h-auto bg-white object-contain"
                            @error="$event.target.src = '/images/default/placeholder.png'"
                            :src="'/images/reports-images/Appendices.png'" alt="" />
                    </div>
                    <div class="mt-4 border-t-2 border-gray-300 pt-4">
                        <table class="table-auto w-full text-left text-gray-700">
                            <thead>
                                <tr class="">
                                    <th class="px-4 py-2 font-semibold">Style</th>
                                    <th class="px-4 py-2 font-semibold">
                                        Characteristics
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t-2">
                                    <td class="px-4 py-2">Dominant (D)</td>
                                    <td class="px-4 py-2">
                                        Confidence, assertiveness, and a desire to
                                        lead.
                                    </td>
                                </tr>
                                <tr class="border-t-2">
                                    <td class="px-4 py-2">Influential (I)</td>
                                    <td class="px-4 py-2">
                                        Enthusiasm, sociability, and communication
                                        skills.
                                    </td>
                                </tr>
                                <tr class="border-t-2">
                                    <td class="px-4 py-2">Supportive (S)</td>
                                    <td class="px-4 py-2">
                                        Reliability, cooperation, and a preference
                                        for stable environments.
                                    </td>
                                </tr>
                                <tr class="border-t-2">
                                    <td class="px-4 py-2">Cautious (C)</td>
                                    <td class="px-4 py-2">
                                        Organisation, attention to detail, and
                                        precision.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class=" rounded-lg mb-6">
                    <h2 class="text-3xl font-bold">Additional Resources</h2>
                    <div class="mt-4">
                        <p class="text-lg text-gray-700">
                            <strong>Links and References for Further Reading:</strong>
                        </p>
                        <ul class="list-none pl-5 text-gray-700 space-y-2">
                            <li><strong>Books on DISC for Children:</strong></li>
                            <ol class="">
                                <li>
                                    <b>1.<strong>"The Adventures of the DISC
                                            Zoo"</strong>
                                        by Crystal Parker and David S. Rutherford</b>
                                    – A fun and engaging book that introduces
                                    children to the DISC personality styles through
                                    the adventures of zoo animals.
                                </li>
                                <li>
                                    <b>2.<strong>"DISC for Kids: Unlocking the Secrets
                                            to Understanding Your Child's
                                            Personality"</strong>
                                        by Carol G. Kauffman</b>
                                    – A comprehensive guide for parents and teachers
                                    to understand and apply DISC principles to
                                    support children’s development.
                                </li>
                                <li>
                                    <b>3.<strong>"Personality Plus for Parents:
                                            Understanding What Makes Your Child
                                            Tick"</strong>
                                        by Florence Littauer</b>
                                    – A book that explores different personality
                                    types, including DISC, and offers practical
                                    advice for parents.
                                </li>
                                <li>
                                    <b>4.<strong>"Raising Leaders: How to Encourage and
                                            Mentor Your Kids"</strong>
                                        by Tim Elmore</b>
                                    – Focuses on developing leadership skills in
                                    children, including understanding their DISC
                                    styles.
                                </li>
                            </ol>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- For ID Style Type -->
        <div id="ID" v-if="style == 'ID'">
            <div class=" space-y-6">
                <h2 class="text-3xl font-bold">Reading Others</h2>
                <p class="text-lg text-gray-700">
                    Here’s a quick chart to help you identify a person's primary
                    style:
                </p>

                <div class="my-4 flex justify-center items-center">
                    <img class="w-30 h-auto bg-white object-contain"
                        @error="$event.target.src = '/images/default/placeholder.png'"
                        :src="'/images/reports-images/Appendices.png'" alt="" />
                </div>

                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=" rounded-lg mb-6">


                    <h2 class="text-3xl font-bold mt-6">
                        Additional Resources
                    </h2>
                    <p class="text-lg text-gray-700">
                        Links and References for Further Reading:
                    </p>

                    <div class="space-y-4">
                        <div class="">
                            <p class=" font-bold text-gray-800">
                                <strong>
                                    Books on DISC for Children:
                                </strong>
                            </p>
                            <ul class="list-none pl-6 text-gray-700">
                                <li>
                                    <b>The Adventures of the DISC Zoo" by Crystal
                                        Parker and David S. Rutherford</b>
                                    - A fun and engaging book that introduces children
                                    to the DISC personality styles through the
                                    adventures of zoo animals.
                                </li>
                                <li>
                                    <b>DISC for Kids: Unlocking the Secrets to
                                        Understanding Your Child's Personality" by Carol
                                        G. Kauffman</b>
                                    - A comprehensive guide for parents and teachers to
                                    understand and apply DISC principles to support
                                    children’s development.
                                </li>
                                <li>
                                    <b>Personality Plus for Parents: Understanding
                                        What Makes Your Child Tick" by Florence
                                        Littauer</b>
                                    - A book that explores different personality types,
                                    including DISC, and offers practical advice for
                                    parents.
                                </li>
                                <li>
                                    <b>Raising Leaders: How to Encourage and Mentor
                                        Your Kids" by Tim Elmore</b>
                                    - Focuses on developing leadership skills in
                                    children, including understanding their DISC styles.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For IS Style Type -->
        <div id="IS" v-if="style == 'IS'">
            <div class="">
                <h2 class="text-3xl font-bold">Reading Others:</h2>

                <span class="mb-4">
                    Here’s a quick chart to help you identify a person's primary
                    style:
                </span>
                <div class="my-4 flex justify-center items-center">
                    <img class="w-30 h-auto bg-white object-contain"
                        @error="$event.target.src = '/images/default/placeholder.png'"
                        :src="'/images/reports-images/Appendices.png'" alt="" />
                </div>

                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=" rounded-lg mb-6">

                    <h2 class="text-3xl font-bold mt-6 mb-2">
                        Additional Resources
                    </h2>
                    <p class="mb-4">Links and References for Further Reading:</p>
                    <ul class="list-none pl-5 space-y-2">
                        <li><strong>Books on DISC for Children:</strong></li>
                        <ul class="list-none pl-5">
                            <li>
                                <b>The Adventures of the DISC Zooby Crystal Parker
                                    and David S. Rutherford </b>
                                <br>
                                <p class="ml-5">
                                    A fun and engaging book that
                                    introduces children to the DISC personality styles
                                    through the adventures of zoo animals.
                                </p>
                            </li>
                            <li>
                                <b>DISC for Kids: Unlocking the Secrets to
                                    Understanding Your Child's Personality
                                    by Carol G. Kauffman </b>
                                <br>
                                <p class="ml-5">
                                    A comprehensive guide for parents
                                    and teachers to understand and apply DISC principles to
                                    support children’s development.
                                </p>

                            </li>
                            <li>
                                <b>Personality Plus for Parents: Understanding What
                                    Makes Your Child Tick
                                    by Florence Littauer </b>
                                <p class="ml-5">
                                    A book that explores different
                                    personality types, including DISC, and offers practical
                                    advice for parents.

                                </p>
                            </li>
                            <li>
                                <b>Raising Leaders: How to Encourage and Mentor Your
                                    Kids
                                    by Tim Elmore </b>
                                <p class="ml-5">
                                    Focuses on developing leadership skills
                                    in children, including understanding their DISC styles.

                                </p>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For S Style Type -->
        <div id="S" v-if="style == 'S'">
            <div class="">
                <h2 class="text-3xl font-bold">Reading Others:</h2>

                <div class="mb-6">
                    <p class="text-xl font-bold">
                        Here’s a quick chart to help you identify a person's primary
                        style:
                    </p>
                    <div class="my-4 flex justify-center items-center">
                        <img class="w-30 h-auto bg-white object-contain"
                            @error="$event.target.src = '/images/default/placeholder.png'"
                            :src="'/images/reports-images/Appendices.png'" alt="" />
                    </div>
                    <!-- You can add a chart or table here if needed -->
                </div>


                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class=" rounded-lg mb-6">
                    <h2 class="text-3xl font-bold">Additional Resources</h2>
                    <p class="mb-4">
                        <strong>Links and References for Further Reading:</strong>
                    </p>
                    <p class="mb-2"><strong>Books on DISC for Children:</strong></p>
                    <ul class="list-none pl-5">
                        <li>
                            <strong>"The Adventures of the DISC Zoo" by Crystal Parker
                                and David S. Rutherford:</strong>
                            A fun and engaging book that introduces children to the
                            DISC personality styles through the adventures of zoo
                            animals.
                        </li>
                        <li>
                            <strong>"DISC for Kids: Unlocking the Secrets to
                                Understanding Your Child's Personality" by Carol G.
                                Kauffman:</strong>
                            A comprehensive guide for parents and teachers to
                            understand and apply DISC principles to support
                            children’s development.
                        </li>
                        <li>
                            <strong>"Personality Plus for Parents: Understanding What
                                Makes Your Child Tick" by Florence Littauer:</strong>
                            A book that explores different personality types,
                            including DISC, and offers practical advice for parents.
                        </li>
                        <li>
                            <strong>"Raising Leaders: How to Encourage and Mentor Your
                                Kids" by Tim Elmore:</strong>
                            Focuses on developing leadership skills in children,
                            including understanding their DISC styles.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For SC Style Type -->
        <div id="SC" v-if="style == 'SC'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold">Reading Others:</h2>
                <p class="text-base">
                    Here’s a quick chart to help you identify a person's primary
                    style:
                </p>
                <div class="my-4 flex justify-center items-center">
                    <img class="w-30 h-auto bg-white object-contain"
                        @error="$event.target.src = '/images/default/placeholder.png'"
                        :src="'/images/reports-images/Appendices.png'" alt="" />
                </div>
                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=" rounded-lg mb-6">
                    <h2 class="text-3xl font-bold">Additional Resources</h2>
                    <p class="text-base">
                        <strong>
                            Links and References for Further Reading:
                        </strong>
                    </p>
                    <ul class="list-none pl-5 space-y-2">
                        <li><strong>Books on DISC for Children:</strong></li>
                        <ul class="list-inside list-none pl-5 space-y-1">
                            <li>
                                <strong>
                                    "The Adventures of the DISC Zoo" by Crystal Parker and
                                    David S. Rutherford
                                </strong>
                                <p class="ml-7">
                                    A fun and engaging book that
                                    introduces children to the DISC personality styles
                                    through the adventures of zoo animals.

                                </p>
                            </li>
                            <li>
                                <strong>
                                    "DISC for Kids: Unlocking the Secrets to Understanding
                                    Your Child's Personality" by Carol G. Kauffman
                                </strong>

                                <p class="ml-7">
                                    A
                                    comprehensive guide for parents and teachers to
                                    understand and apply DISC principles to support
                                    children’s development.
                                </p>

                            </li>
                            <li>
                                <strong>
                                    "Personality Plus for Parents: Understanding What Makes
                                    Your Child Tick" by Florence Littauer
                                </strong>

                                <p class="ml-7">
                                    A book that
                                    explores different personality types, including DISC,
                                    and offers practical advice for parents.
                                </p>

                            </li>
                            <li>
                                <strong>
                                    "Raising Leaders: How to Encourage and Mentor Your Kids"
                                    by Tim Elmore
                                </strong>

                                <p class="ml-7">
                                    Focuses on developing leadership skills
                                    in children, including understanding their DISC styles.

                                </p>

                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>

        <!-- For SI Style Type -->
        <div id="SI" v-if="style == 'SI'">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold">Reading Others:</h2>
                <p class="text-base">
                    Here’s a quick chart to help you identify a person's primary
                    style:
                </p>
                <div class="my-4 flex justify-center items-center">
                    <img class="w-30 h-auto bg-white object-contain"
                        @error="$event.target.src = '/images/default/placeholder.png'"
                        :src="'/images/reports-images/Appendices.png'" alt="" />
                </div>

                <table class="table-auto w-full border-collapse mb-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Style</th>
                            <th class="border px-4 py-2">Characteristics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Dominant (D)</td>
                            <td class="border px-4 py-2">
                                Confidence, Assertiveness, Leadership
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Influential (I)</td>
                            <td class="border px-4 py-2">
                                Enthusiasm, Sociability, Communication Skills
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Supportive (S)</td>
                            <td class="border px-4 py-2">
                                Reliability, Cooperation, Stability
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Cautious (C)</td>
                            <td class="border px-4 py-2">
                                Organisation, Attention to Detail, Precision
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=" rounded-lg mb-6">
                    <h2 class="text-3xl font-bold">Additional Resources</h2>
                    <p class="text-base">Links and References for Further Reading:</p>

                    <h3 class="text-base font-semibold">Books on DISC for Children:</h3>
                    <ul class="list-none pl-5 space-y-2">
                        <li>
                            <strong>"The Adventures of the DISC Zoo" by Crystal
                                Parker and David S. Rutherford </strong>
                            <p class="ml-8">
                                A fun and engaging book
                                that introduces children to the DISC personality styles
                                through the adventures of zoo animals.
                            </p>
                        </li>
                        <li>
                            <strong>"DISC for Kids: Unlocking the Secrets to Understanding
                                Your Child's Personality"
                                by Carol G. Kauffman </strong>
                            <p class="ml-8">
                                A comprehensive guide for parents and
                                teachers to understand and apply DISC principles to support
                                children’s development.
                            </p>
                        </li>
                        <li>
                            <strong>"Personality Plus for Parents: Understanding What Makes
                                Your Child Tick"
                                by Florence Littauer </strong>
                            <p class="ml-8">
                                A book that explores different
                                personality types, including DISC, and offers practical
                                advice for parents.
                            </p>
                        </li>
                        <li>
                            <strong>"Raising Leaders: How to Encourage and Mentor Your
                                Kids"
                                by Tim Elmore </strong>
                            <p class="ml-8">
                                Focuses on developing leadership skills in
                                children, including understanding their DISC styles.
                            </p>


                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</template>


<style scoped>
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
span,
b,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
h4,
.p-6>.row>.col-6>h2 {
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

ul>li {
    margin-top: 17px;
}

p,
ul>li,
ol>li,
strong,
.text-base {
    font-size: 1.125rem;
    line-height: 1.75rem;
}


/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    strong {
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
        font-size: 1.5rem !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row+.row {
        margin-top: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "Appendices",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
