<template>
    <div class="container mx-auto p-4">
        <h1 class="font-bold mb-2 text-center">Your DISC Style Summary</h1>
    </div>

    <!-- For C Style Type -->
    <div v-if="style == 'C'" class="welcome-message p-6 rounded-lg pt-0 ">

        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-4xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Cautious (C)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        <strong>You are a Perfectionist!</strong> You love to make
                        sure everything is perfect and done correctly.
                    </p>
                </div>
                You have a <strong>Cautious (C)</strong> style. This means
                you are a thoughtful and detail-oriented person who enjoys
                thinking things through and making sure everything is just
                right. Here’s a little bit more about what makes you so
                special:
                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Detail-Oriented:</strong> You pay close
                                attention to details and like to make sure things are
                                done correctly.
                            </li>
                            <li>
                                <strong>Analytical:</strong> You enjoy solving problems
                                and thinking things through carefully.
                            </li>
                            <li>
                                <strong>Organised:</strong> You like to keep things in
                                order and plan ahead.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside text-lg ">
                        <li>
                            You enjoy activities that involve building, creating,
                            and solving puzzles.
                        </li>
                        <li>
                            You like games that require thinking and strategy, such
                            as board games or computer games.
                        </li>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You prefer smaller groups or one-on-one interactions
                                where you can have deeper conversations.
                            </li>
                            <li>
                                You are a good listener and often help your friends by
                                giving thoughtful advice.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You learn best in environments where you can work
                                quietly and focus on your tasks.
                            </li>
                            <li>
                                You enjoy activities that allow you to work at your own
                                pace and think things through.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <li>
                        <strong>Be Confident:</strong> Remember, your ideas and
                        thoughts are important. Don’t be afraid to share them.
                    </li>
                    <li>
                        <strong>Embrace Flexibility:</strong> It’s okay if
                        things don’t always go as planned. Try to go with the
                        flow sometimes.
                    </li>
                    <li>
                        <strong>Stay Positive:</strong> Keep using your amazing
                        skills to help others and solve problems, and remember
                        that it’s okay to make mistakes and learn from them.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, {{ childName }} , you are a wonderful and
                    thoughtful person! Use your strengths to help others and
                    make the world a better place. We are so proud of you and
                    can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For CD Style Type -->
    <div v-if="style == 'CD'" class="welcome-message p-6 rounded-lg">



        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Cautious-Dominant (CD)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        <strong>You are an Analytical Leader! You lead with precision
                            and like things to be accurate.</strong>
                    </p>
                </div>
                You have a
                <span class="font-semibold text-gray-900">Cautious-Dominant (CD)</span>
                style. This means you like to be careful and precise, and you
                also enjoy being a leader. Here’s a little bit more about what
                makes you so special:
                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <span class="font-semibold ">Detail-Oriented:</span>
                                You notice the little things and make sure everything is
                                done just right. This helps you do tasks accurately.
                            </li>
                            <li>
                                <span class="font-semibold ">Leader:</span>
                                You’re great at taking charge and leading others. Your
                                confidence helps you guide your friends and classmates.
                            </li>
                            <li>
                                <span class="font-semibold ">Problem-Solver:</span>
                                You’re good at figuring out solutions to problems. Your
                                thinking skills help you understand tough situations and
                                find the best way forward.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside  space-y-2">
                        <li>
                            You enjoy games that require planning and thinking
                            ahead, like chess or building complex models.
                        </li>
                        <li>
                            You have fun when you can lead and organise group
                            activities, like being the team captain or project
                            leader.
                        </li>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You are sure of your ideas and like to take the lead in
                                group activities.
                            </li>
                            <li>
                                Even though you like to lead, you also make sure your
                                friends are doing well and help them when they need it.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <li>
                                You learn best when there is a clear plan and set of
                                instructions. You like knowing what to expect.
                            </li>
                            <li>
                                You enjoy learning by doing things and using your
                                problem-solving skills.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <li>
                        <span class="font-semibold ">Stay Focused:</span>
                        Keep paying attention to details and doing your best
                        work. Your careful nature is a great strength.
                    </li>
                    <li>
                        <span class="font-semibold ">Be Confident:</span>
                        Trust in your ability to lead and know that you can
                        guide others well.
                    </li>
                    <li>
                        <span class="font-semibold ">Help Others:</span>
                        Use your problem-solving skills to help your friends and
                        classmates when they need it.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    <span class="font-semibold">Remember  {{ childName }} </span>, you
                    are amazing with your careful and leadership qualities. Use
                    your strengths to lead and help others while enjoying the
                    activities you love! Your attention to detail and
                    problem-solving skills can make a big difference in your
                    world. We are so proud of you and can’t wait to see all the
                    amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For CS Style Type -->
    <div id="CS" v-if="style == 'CS'">


        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Cautious-Supportive (CS)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You
                        are a Supportive Organiser! You enjoy helping others and
                        making sure things are in order.
                    </p>
                </div>
                You have a <span class="font-semibold text-gray-900">Cautious-Supportive (CS)</span> style. This means
                you
                are careful, reliable, and always ready to help others.
                Here’s a little bit more about what makes you so special:
                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <span class="font-semibold">Attention to Detail:</span>
                                You pay close attention to details and make sure everything is done correctly. Your careful nature ensures that tasks are completed accurately.

                            </li>
                            <li>
                                <span class="font-semibold">Reliability:</span>
                                People can count on you to do what you say you will do. Your reliability makes you a trusted friend and team member.

                            </li>
                            <li>
                                <span class="font-semibold">Helpfulness:</span>
                                You enjoy helping others and making sure everyone is okay. Your supportive nature brings comfort and assistance to those around you.

                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <li>
                            You enjoy games and activities that are calm and allow you to focus, like puzzles, board games, or reading.

                        </li>
                        <li>
                            You have fun when you can help organise or support others in their activities, like being a helper in a group project.

                        </li>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You always think about how your friends feel and try to make sure everyone is happy.

                            </li>
                            <li>
                                You are there to help your friends when they need it, whether it’s with homework or playing games.

                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <li>
                                You learn best when information is presented in a clear, step-by-step manner. You like to know the details and understand each part..

                            </li>
                            <li>
                                You prefer learning in a quiet and calm environment where you can concentrate on the task at hand.

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <li>
                        <span class="font-semibold">Stay Thoughtful:</span>
                        Keep considering how your actions affect others. Your thoughtfulness is a great strength.

                    </li>
                    <li>
                        <span class="font-semibold">Be Confident:</span>
                        Trust in your abilities and know that you are reliable and capable.

                    </li>
                    <li>
                        <span class="font-semibold">Help Others:</span>
                        Use your helpful nature to support your friends and family. It makes you and others feel good.

                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember,
                    <span class="font-semibold"> {{ childName }} </span>, you are amazing with your careful and supportive nature. Use your strengths to help others and enjoy the activities you love! Your attention to detail and reliability can make a big difference in your world.  We are so proud of you and can’t wait to see all the amazing things you will do!

                </p>
            </div>
        </div>
    </div>

    <!-- For D Style Type -->
    <div v-if="style == 'D'" class="welcome-message p-6 rounded-lg">

        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Dominant (D)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        <strong>You are a Leader! You like to be in charge and enjoy
                            challenges. Keep being awesome!</strong>
                    </p>
                </div>
                You have a
                <span class="font-semibold text-gray-900">Dominant (D)</span>
                style. This means you are a natural leader and love to take
                charge. Here’s a little bit more about what makes you so special
                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <b>Confident:</b> You are not afraid to take on new
                                challenges and you believe in yourself.
                            </li>
                            <li>
                                <b>Decisive:</b> You can make decisions quickly and you
                                stick to them.
                            </li>
                            <li>
                                <b>Energetic:</b> You have a lot of energy, and you like
                                to be active and busy.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <li>
                            You enjoy games where you can lead, like being the
                            captain of a team or the one who makes the rules.
                        </li>
                        <li>
                            You like to set goals and work hard to achieve them,
                            whether it’s building the tallest tower with blocks or
                            winning a race.
                        </li>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You like to take charge in group activities and often
                                find yourself being the one to organise things.
                            </li>
                            <li>
                                Sometimes you might come across as a bit bossy, but you
                                just want to make sure things are done right.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <li>
                                You enjoy activities that are challenging and allow you
                                to show what you can do.
                            </li>
                            <li>
                                You like when teachers give you tasks that you can
                                complete on your own or lead a group in.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <li>
                        <b>Listen to Others:</b> Sometimes it’s important to
                        hear what your friends have to say and include their
                        ideas.
                    </li>
                    <li>
                        <b>Take Turns:</b> Let others have a chance to lead too.
                        It can be fun to see what ideas they come up with.
                    </li>
                    <li>
                        <b>Stay Positive:</b> Even when things don’t go as
                        planned, keep a positive attitude and try again.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember,
                    <span class="font-semibold"> {{ childName }} </span>, you
                    are a strong and capable leader! Use your skills to help
                    others and make your world a better place. We are so proud
                    of you and can’t wait to see all the amazing things you will
                    do!
                </p>
            </div>
        </div>
    </div>

    <!-- For DC Style Type -->
    <div id="DC" v-if="style == 'DC'">

        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Dominant-Cautious (DC)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are a Precise Leader! You like to lead with a focus on
                        details and accuracy

                    </p>
                </div>
                You have a Dominant-Cautious (DC). This means you are a
                natural leader who is also very detailed and organised.
                Here’s a little bit more about what makes you so special:
                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Leadership:</strong> You are great at taking
                                charge and guiding others.
                            </li>
                            <li>
                                <strong>Attention to Detail:</strong> You pay close
                                attention to the small things and make sure
                                everything is just right.
                            </li>
                            <li>
                                <strong>Goal-Oriented:</strong> You set clear goals
                                and work hard to achieve them.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <li>
                            You enjoy games where the rules are clear, and you
                            know exactly what to do.
                        </li>
                        <li>
                            You like playing in places where there’s a plan and
                            you know what’s coming next.
                        </li>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You often lead group activities and help your
                                friends understand the rules.
                            </li>
                            <li>
                                You make sure everything in the game is done
                                correctly.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <li>
                                You take pride in doing things well and like seeing
                                the results of your hard work.
                            </li>
                            <li>
                                You prefer step-by-step instructions, so you know
                                exactly what to do.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <li>
                        <strong>Set Realistic Goals:</strong> Make sure your
                        goals are achievable and celebrate when you reach
                        them.
                    </li>
                    <li>
                        <strong>Balance Work and Play:</strong> Take breaks
                        and have fun so you don’t get too tired.
                    </li>
                    <li>
                        <strong>Encourage Precision:</strong> Keep paying
                        attention to details and help others see why doing
                        things well is important.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, {{ childName }} , you are amazing with your
                    leadership and attention to detail. Use your strengths to
                    help others and achieve great things! We are so proud of you
                    and can’t wait to see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For DI Style Type -->
    <div id="DI" v-if="style == 'DI'">

        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Dominant-Influential (DI)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are a Social Leader! You love to lead and also enjoy
                        socialising and making new friends

                    </p>
                </div>
                You have a Dominant-Influential (DI) style. This means you
                are a natural leader who is also outgoing and enthusiastic.
                You love to take charge and enjoy interacting with others.
                Here’s a little bit more about what makes you so special:
                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Confident:</strong> You believe in yourself
                                and are not afraid to take on new challenges.
                            </li>
                            <li>
                                <strong>Energetic:</strong> You have a lot of energy
                                and like to be active and busy.
                            </li>
                            <li>
                                <strong>Sociable:</strong> You enjoy being around
                                people and making new friends.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <li>
                            You enjoy games where you can lead, like being the
                            captain of a team or the one who makes the rules.
                        </li>
                        <li>
                            You love activities that involve others, such as
                            team sports, group games, and social events.
                        </li>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You often take charge in group activities and enjoy
                                organising things.
                            </li>
                            <li>
                                You are good at making new friends and love to talk
                                and share ideas with others.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <li>
                                You learn best by doing activities with others where
                                you can talk and share ideas.
                            </li>
                            <li>
                                You enjoy learning through games and group projects
                                that are fun and interactive.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <li>
                        <strong>Share the Spotlight:</strong> Make sure to
                        let your friends share their ideas and take the lead
                        sometimes.
                    </li>
                    <li>
                        <strong>Be a Team Player:</strong> Work together
                        with others and value their contributions.
                    </li>
                    <li>
                        <strong>Use Your Energy Wisely:</strong> Balance
                        your active times with rest to stay energised and
                        happy.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, {{ childName }} , you are a strong and capable
                    leader who brings energy and enthusiasm to everything you
                    do! Use your skills to help others and make your world a
                    better place. We are so proud of you and can’t wait to see
                    all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For I Style Type -->
    <div id="I" v-if="style == 'I'">

        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Influential (I)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are a Social Star! You love talking to people and making new friends. Shine on!

                    </p>
                </div>
                You have an Influential (I) style. This means you are naturally outgoing, enthusiastic, and you love being around people. Here’s a little bit more about what makes you so special:

                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Sociable:</strong> You enjoy talking and making new friends. You are a natural communicator and can easily engage with others.

                            </li>
                            <li>
                                <strong>Enthusiastic:</strong> You bring a lot of energy and excitement to everything you do. Your enthusiasm is contagious!
                            </li>
                            <li>
                                <strong>Creative:</strong> You have a vivid imagination and are great at coming up with new ideas and solutions.

                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <li>
                            You enjoy games where you can interact with others, like role-playing games or team sports.

                        </li>
                        <li>
                            You love activities that allow you to be creative, such as drawing, storytelling, or building things.

                        </li>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                You are very friendly and can easily make new friends.

                            </li>
                            <li>
                                You enjoy being the centre of attention and entertaining others with your stories and jokes.

                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <li>
                                You learn best through interactive activities and group projects where you can share your ideas.

                            </li>
                            <li>
                                You enjoy creative assignments that allow you to use your imagination.

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">

                    <li>
                        <strong>Stay Organised:</strong>
                     Try to keep your things in order and make a plan for your tasks. This will help you stay on track.

                    </li>
                    <li>
                        <strong>Practice Listening:</strong>
                        Remember to take turns and listen to what others have to say. It will help you learn new things and understand your friends better.

                    </li>
                    <li>
                        <strong>Focus on One Thing at a Time:</strong> Sometimes, it’s important to focus on one task at a time to do your best work.
                    </li>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, {{ childName }}, you are a bright and enthusiastic person! Use your energy and creativity to make the world a more fun and exciting place. We are so proud of you and can’t wait to see all the amazing things you will do!

                </p>
            </div>
        </div>
    </div>

    <!-- For ID Style Type -->
    <div id="ID" v-if="style == 'ID'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Influential-Dominant (ID)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are an Influential Leader! You enjoy leading and being the
                        center of attention while influencing others

                    </p>
                </div>

                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>

                <p>
                    You have an <span class="font-semibold text-gray-900">Influential-Dominant (ID) </span> style. This means
                      This means you are outgoing, enthusiastic, and love to take the lead. Here’s a little bit more about what makes you so special:

                </p>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Enthusiasm:</strong> You bring energy and excitement
                                to everything you do. Your enthusiasm is contagious and
                                inspires others around you.
                            </li>
                            <li>
                                <strong>Leadership:</strong> You are confident and enjoy
                                taking charge of activities. You have a natural ability to
                                guide and motivate others to achieve common goals.
                            </li>
                            <li>
                                <strong>Sociability:</strong> You make friends easily and
                                enjoy being around people. Your friendly nature helps you
                                build strong connections and create a positive atmosphere.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <ul class="list-none pl-6  mt-2">
                            <li>
                                You enjoy games and activities where you can play with
                                friends and take on leadership roles.
                            </li>
                            <li>
                                You have fun with activities that let you use your
                                imagination, like drawing, storytelling, or building things.
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You love to cheer on your friends and make them feel good
                                    about themselves.
                                </li>
                                <li>
                                    You naturally take the lead in group activities and enjoy
                                    organising games and projects.
                                </li>
                            </ul>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You learn best when you can talk with others and share
                                    ideas. Group projects and discussions are your favourites.
                                </li>
                                <li>
                                    You like learning by doing things, especially when it
                                    involves creativity and teamwork.
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <ul class="list-none pl-6  mt-2">
                        <li>
                            <strong>Stay Positive:</strong> Keep your positive attitude
                            and share it with others. Your enthusiasm makes everyone
                            happy.
                        </li>
                        <li>
                            <strong>Lead with Kindness:</strong> Use your leadership
                            skills to help others and make sure everyone feels included.
                        </li>
                        <li>
                            <strong>Be Organised:</strong> Try to keep your things tidy
                            and plan your activities so you can have even more fun.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, <span class="font-semibold">{{ childName }}</span>, you
                    are amazing with your energy and leadership. Use your strengths
                    to help others and have fun along the way! Your positive
                    influence can make a big difference in your world. We are so
                    proud of you and can’t wait to see all the amazing things you
                    will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For IS Style Type -->
    <div id="IS" v-if="style == 'IS'">
        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Influential-Supportive (IS) Style
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are a Friendly Supporter! You
                        enjoy socialising and helping others in small groups

                    </p>
                    You have an Influential-Supportive (IS) style. This means you
                    are friendly, enthusiastic, and always ready to help others.
                    Here’s a little bit more about what makes you so special:
                </div>

                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Friendliness:</strong> You make friends
                                easily and enjoy being around people.
                            </li>
                            <li>
                                <strong>Enthusiasm:</strong> You are always excited
                                and bring energy to everything you do.
                            </li>
                            <li>
                                <strong>Supportive Nature:</strong> You love to help
                                others and make sure everyone feels included.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <ul class="list-none pl-6  mt-2">
                            <li>
                                You enjoy games and activities where you can play
                                with your friends and work together as a team.
                            </li>
                            <li>
                                You have fun with activities that let you use your
                                imagination, like drawing, storytelling, or building
                                things.
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You always cheer on your friends and make them feel
                                    good about themselves.
                                </li>
                                <li>
                                    You work well with others and enjoy sharing and
                                    taking turns during games.
                                </li>
                            </ul>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You learn best when you can talk with others and
                                    share ideas. Group projects and discussions are your
                                    favourites.
                                </li>
                                <li>
                                    You like learning by doing things, especially when
                                    it involves creativity and teamwork.
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <ul class="list-none pl-6  mt-2">
                        <li>
                            <strong>Stay Positive:</strong> Keep your positive
                            attitude and share it with others. Your enthusiasm
                            makes everyone happy.
                        </li>
                        <li>
                            <strong>Help Others:</strong> Continue to help your
                            friends and classmates. They appreciate your support
                            and kindness.
                        </li>
                        <li>
                            <strong>Use Your Creativity:</strong> Find new ways
                            to use your imagination in everything you do,
                            whether it’s in school or at home.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, {{ childName }} , you are amazing with your friendly
                    and supportive nature. Use your strengths to help others and
                    have fun along the way! We are so proud of you and can’t wait to
                    see all the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For S Style Type -->
    <div id="S" v-if="style == 'S'">

        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Supportive (S) Style
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are a Reliable Friend! You enjoy helping others and
                        working in small, stable groups.

                    </p>
                    <p>
                        You have a <strong>Supportive (S)</strong> style. This
                        means you are a caring and dependable person who enjoys
                        helping others. Here’s a little bit more about what
                        makes you so special:
                    </p>
                </div>

                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Reliable:</strong> You are always there
                                when someone needs you, and your friends can
                                count on you.
                            </li>
                            <li>
                                <strong>Patient:</strong> You take your time
                                with tasks and are willing to help others
                                without rushing.
                            </li>
                            <li>
                                <strong>Team Player:</strong> You enjoy working
                                with others and making sure everyone feels
                                included.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <ul class="list-none pl-6  mt-2">
                            <li>
                                You enjoy games where everyone gets to
                                participate and have fun together.
                            </li>
                            <li>
                                You like activities that involve helping others,
                                like building something as a team or playing
                                cooperative games.
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You are great at making sure everyone gets along
                                    and feels included.
                                </li>
                                <li>
                                    You enjoy being there for your friends and
                                    supporting them when they need help.
                                </li>
                            </ul>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You learn best in environments where you feel
                                    supported and can work at your own pace.
                                </li>
                                <li>
                                    You enjoy working in groups where you can
                                    collaborate and help each other.
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <ul class="list-none pl-6  mt-2">
                        <li>
                            <strong>Speak Up:</strong> Remember, your ideas
                            are important too! Try to share your thoughts
                            more often.
                        </li>
                        <li>
                            <strong>Take Initiative:</strong> Sometimes,
                            it’s good to take the lead. Don’t be afraid to
                            step up when you have a good idea.
                        </li>
                        <li>
                            <strong>Stay Positive:</strong> Keep being the
                            caring and patient person you are, and remember
                            that it’s okay to ask for help when you need it.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, <span class="font-bold"> {{ childName }} </span>,
                    you are a wonderful and supportive friend! Use your
                    strengths to help others and create a positive environment
                    around you. We are so proud of you and can’t wait to see all
                    the amazing things you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For SC Style Type -->
    <div id="SC" v-if="style == 'SC'">


        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Supportive-Cautious (SC) Style
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are a Caring Organiser! You enjoy helping others and
                        keeping things organised and accurate

                    </p>
                    <p>
                        You have a Supportive-Cautious (SC) style. This means you are
                        thoughtful, reliable, and love to help others. Here’s a little
                        bit more about what makes you so special:
                    </p>
                </div>

                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Thoughtfulness:</strong> You always think about how
                                your actions affect others. Your careful nature ensures that
                                everyone feels considered and respected.
                            </li>
                            <li>
                                <strong>Reliability:</strong> People can count on you to do
                                what you say you will do. Your reliability makes you a
                                trusted friend and team member.
                            </li>
                            <li>
                                <strong>Helpfulness:</strong> You enjoy helping others and
                                making sure everyone is okay. Your supportive nature brings
                                comfort and assistance to those around you.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <ul class="list-none pl-6  mt-2">
                            <li>
                                You enjoy games and activities that are calm and allow you
                                to think, like puzzles, board games, or reading.
                            </li>
                            <li>
                                You have fun when you can help organise or support others in
                                their activities, like being a helper in a group project.
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You always think about how your friends feel and try to make
                                    sure everyone is happy.
                                </li>
                                <li>
                                    You are there to help your friends when they need it,
                                    whether it’s with homework or playing games.
                                </li>
                            </ul>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You learn best when information is presented in a clear,
                                    step-by-step manner. You like to know the details and
                                    understand each part.
                                </li>
                                <li>
                                    You prefer learning in a quiet and calm environment where
                                    you can concentrate on the task at hand.
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <ul class="list-none pl-6  mt-2">
                        <li>
                            <strong>Stay Thoughtful:</strong> Keep considering how your
                            actions affect others. Your thoughtfulness is a great
                            strength.
                        </li>
                        <li>
                            <strong>Be Confident:</strong> Trust in your abilities and
                            know that you are reliable and capable.
                        </li>
                        <li>
                            <strong>Help Others:</strong> Use your helpful nature to
                            support your friends and family. It makes you and others
                            feel good.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, {{ childName }} , you are amazing with your
                    thoughtfulness and reliability. Use your strengths to help
                    others and enjoy the activities you love! Your careful and
                    supportive nature can make a big difference in your world. We
                    are so proud of you and can’t wait to see all the amazing things
                    you will do!
                </p>
            </div>
        </div>
    </div>

    <!-- For SI Style Type -->
    <div id="SI" v-if="style == 'SI'">



        <div class="disc-style-summary p-6 rounded-lg pt-0">

            <div class="disc-description mb-6 row align-items-center ">
                <p class=" col-6  ">
                <h2 class="text-2xl font-semibold text-pink-500 mb-2">
                    {{ childName }} ’s DISC Style: Supportive-Influential (SI)
                </h2>

                <div class="intro mb-6">
                    <h3 class="text-xl font-semibold text-green-500 mb-2">
                        Hi {{ childName }} !
                    </h3>
                    <p class=" ">
                        You are a Sociable Supporter! You enjoy socialising and
                        helping others in a supportive role

                    </p>
                    <p>
                        You have a Supportive-Influential (SI) style. This means you are
                        kind, friendly, and love to help others. Here’s a little bit
                        more about what makes you so special:
                    </p>
                </div>

                </p>
                <div class="my-4 col-6 mt-0">
                    <img class="rounded-full flex w-30 h-30 bg-white object-contain" @error="
                        $event.target.src =
                        '/images/default/placeholder.png'
                        " :src="'/images/reports-images/C.png'" alt="" />
                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="strengths">
                        <h3 class="text-4xl font-bold text-purple-500 mb-2">
                            Your Strengths:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <li>
                                <strong>Kindness:</strong> You are very caring and always
                                think about others’ feelings. Your kindness makes everyone
                                feel welcome and appreciated.
                            </li>
                            <li>
                                <strong>Friendliness:</strong> You make friends easily and
                                enjoy being around people. Your friendly nature helps you
                                create strong bonds with others.
                            </li>
                            <li>
                                <strong>Helpfulness:</strong> You love to help others and
                                make sure everyone feels included. Your willingness to help
                                makes you a great team player.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <h3 class="text-4xl font-bold text-indigo-500 mb-2">
                        How You Like to Play:
                    </h3>
                    <ul class="list-none list-inside space-y-2  mb-4">
                        <ul class="list-none pl-6  mt-2">
                            <li>
                                You enjoy games and activities where you can work together
                                with friends.
                            </li>
                            <li>
                                You have fun with activities that let you use your
                                imagination, like drawing, storytelling, or building things.
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7b.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="row mb-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7c.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6">

                    <div class="friend-interaction mb-6">

                        <h3 class="text-4xl font-bold text-teal-500 mb-2">
                            How You Interact with Friends:
                        </h3>
                        <ul class="list-none list-inside text-lg ">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You love to cheer on your friends and make them feel good
                                    about themselves.
                                </li>
                                <li>
                                    You naturally make sure everyone feels included in games and
                                    activities.
                                </li>
                            </ul>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mb-6 align-items-center">
                <div class="col-6 ">

                    <div class="learning-style mb-6">

                        <h3 class="text-4xl font-bold text-yellow-500 mb-2">
                            How You Learn Best:
                        </h3>
                        <ul class="list-none list-inside  space-y-2">
                            <ul class="list-none pl-6  mt-2">
                                <li>
                                    You learn best when you can talk with others and share
                                    ideas. Group projects and discussions are your favourites.
                                </li>
                                <li>
                                    You like learning by doing things, especially when it
                                    involves creativity and teamwork.
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" @error="
                            $event.target.src =
                            '/images/default/placeholder.png'
                            " :src="'/images/reports-svg-images/Page 7d.svg'" alt="" />
                    </div>

                </div>
            </div>

            <div class="tips mb-6">

                <h3 class="text-4xl font-bold text-red-500 mb-2">
                    Tips for Being the Best You:
                </h3>
                <ul class="list-none list-inside text-lg ">
                    <ul class="list-none pl-6  mt-2">
                        <li>
                            <strong>Stay Positive:</strong> Keep your positive attitude
                            and share it with others. Your friendliness makes everyone
                            happy.
                        </li>
                        <li>
                            <strong>Help Others:</strong> Use your helpful nature to
                            support your friends and family. It makes you and others
                            feel good.
                        </li>
                        <li>
                            <strong>Be Creative:</strong> Keep using your imagination in
                            fun and creative ways. It helps you learn and enjoy what you
                            do.
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="closing-message">
                <p class="text-lg ">
                    Remember, {{ childName }} , you are amazing with your kindness
                    and friendliness. Use your strengths to help others and have fun
                    along the way! Your positive influence can make a big difference
                    in your world. We are so proud of you and can’t wait to see all
                    the amazing things you will do!
                </p>
            </div>
        </div>
    </div>
</template>

<style>
h4 {
    color: rgb(34 197 94);
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
div.space-y-2>h4.font-medium, li> span.font-semibold, li> b {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color:#fa25c4
    /* font-size: 19px; */
}

h2,.p-6>.row>.col-6>h2{
    color: rgb(55 48 163 );
    font-weight: bold !important;
}
p, ul >li {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
ul > li {
    margin-top:13px;
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

    h2, h3{
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

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "YourDiscStyleSummary",
    layout: AssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
