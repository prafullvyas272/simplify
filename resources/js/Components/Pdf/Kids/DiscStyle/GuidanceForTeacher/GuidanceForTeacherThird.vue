<template>
    <div class="p-6">
   <div class="container mx-auto p-4">

   </div>

   <div v-if="style == 'C'">
       <div class="supporting-at-home p-6 mb-2">


           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center mt-5">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a Cautious (C)
                               Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       Your attention to detail is impressive.
                                       Your work is always so precise!
                                   </li>
                                   <li>
                                       I appreciate your thorough approach. It
                                       really shows in the quality of your
                                       work.
                                   </li>
                                   <li>
                                       Your analytical skills are fantastic.
                                       How did you come up with that solution?
                                   </li>
                                   <li>
                                       Great job on organising everything so
                                       well. It really makes a difference.
                                   </li>
                                   <li>
                                       Your careful planning is evident. What
                                       part of the process did you enjoy most?
                                   </li>
                                   <li>
                                       You did an excellent job of thinking
                                       this through. What other ideas do you
                                       have?
                                   </li>
                                   <li>
                                       Your methodical approach helps us
                                       understand complex problems better. How
                                       can we apply this to our next project?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It's okay to be flexible sometimes. How can
                                   we adjust if things don't go as planned?
                               </li>
                               <li>
                                   Remember, it's fine to make mistakes. They
                                   help us learn and improve.
                               </li>
                               <li>
                                   Let's try to see the bigger picture. How
                                   does this fit into our overall goal?
                               </li>
                               <li>
                                   While rules are important, being adaptable
                                   is also key. How can we balance both?
                               </li>
                               <li>
                                   If you feel stuck, breaking the task into
                                   smaller parts might help. What step can we
                                   take first?
                               </li>
                               <li>
                                   Patience is crucial. Let's practice being
                                   patient and taking things one step at a
                                   time.
                               </li>
                               <li>
                                   It's important to listen to others' ideas
                                   too. What do you think your classmates are
                                   trying to say?
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- For CD Style Type -->
   <div id="CD" v-if="style == 'CD'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center mt-5">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   <div data-v-0132f395="" class=" mt-10 flex justify-center items-center"><img data-v-0132f395="" class="w-240 h-auto object-contain" src="/images/reports-svg-images/Page16.svg" alt=""></div>

                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a
                               Cautious-Dominant (CD) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       I love how you think things through.
                                       Your attention to detail is amazing.
                                   </li>
                                   <li>
                                       You are a natural leader. Your
                                       confidence is inspiring to others.
                                   </li>
                                   <li>
                                       Great job figuring that out! Your
                                       problem-solving skills are impressive.
                                   </li>
                                   <li>
                                       I appreciate how you plan everything
                                       carefully. It makes a big difference.
                                   </li>
                                   <li>
                                       You did an excellent job leading that
                                       project. What did you enjoy most about
                                       it?
                                   </li>
                                   <li>
                                       Your focus and determination are
                                       wonderful. Keep up the great work!
                                   </li>
                                   <li>
                                       I’m proud of how you handled that
                                       situation. What did you learn from it?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   Remember, it’s okay to be flexible
                                   sometimes. Let’s try to adapt to this change
                                   together.
                               </li>
                               <li>
                                   It’s important to listen to others’ ideas
                                   too. What do you think your classmates have
                                   to say?
                               </li>
                               <li>
                                   Taking charge is great, but let’s also value
                                   the contributions of others.
                               </li>
                               <li>
                                   I know you want to get things done quickly,
                                   but sometimes it’s helpful to take your time
                                   and think it through.
                               </li>
                               <li>
                                   We all make mistakes. Let’s talk about what
                                   we can learn from this experience.
                               </li>
                               <li>
                                   You have great ideas. Let’s make sure
                                   everyone in the group has a chance to share
                                   theirs too.
                               </li>
                               <li>
                                   Patience is key. Let’s practice waiting our
                                   turn and listening carefully to others.
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>

           <div class="row">
               <p>
                   By using these phrases, teachers can effectively motivate, guide, and support Cautious-Dominant (CD)
                   children in a way that respects their natural tendencies while promoting positive behaviour and
                   growth.
               </p>
           </div>
       </div>
   </div>

   <!-- For CS Style Type -->
   <div id="CS" v-if="style == 'CS'">
       <div class="supporting-at-home p-6 mb-2">


           <div class="row">
               <div class="col-6 effective-study-box">
                   <li class="flex items-start space-x-4">
                       <div>
                           <div class="motivational-phrases p-6 rounded-lg mb-6">
                               <h2 class="text-3xl font-bold mb-2800">
                                   Phrases for Teachers to Use with a
                                   Cautious-Supportive (CS) Child
                               </h2>
                               <p class="font-semibold text-blue-500 mb-2">
                                   Motivating and Encouraging Phrases
                               </p>
                               <div class="">
                                   <ul class="list-none list-inside  mb-6">
                                       <li>
                                           I love how carefully you plan
                                           things. Your attention to detail is
                                           impressive.
                                       </li>
                                       <li>
                                           You are so dependable. Everyone
                                           appreciates how reliable you are.
                                       </li>
                                       <li>
                                           Your help is always appreciated. How
                                           can we work together to support
                                           others?
                                       </li>
                                       <li>
                                           Your thoughtful approach makes a big
                                           difference. Keep up the great work!
                                       </li>
                                       <li>
                                           You did an excellent job organising
                                           that project. What part did you
                                           enjoy the most?
                                       </li>
                                       <li>
                                           Your calm and careful nature is a
                                           strength. How can we use it to help
                                           in other areas?
                                       </li>
                                       <li>
                                           I’m proud of how you handled that
                                           situation. What did you learn from
                                           it?
                                       </li>
                                   </ul>
                               </div>

                               <p class="font-semibold text-blue-500 mb-2">
                                   Corrective and Guidance Phrases
                               </p>
                               <ul class="list-none list-inside ">
                                   <li>
                                       It’s okay to make decisions a little
                                       faster. Trust yourself and your
                                       instincts.
                                   </li>
                                   <li>
                                       Sometimes changes happen unexpectedly.
                                       Let’s practice handling them together.
                                   </li>
                                   <li>
                                       It’s important to speak up for yourself.
                                       Your needs and opinions matter.
                                   </li>
                                   <li>
                                       Mistakes are part of learning. Let’s
                                       talk about what we can learn from this
                                       experience.
                                   </li>
                                   <li>
                                       Trying new things can be challenging but
                                       also rewarding. Let’s give it a try.
                                   </li>
                                   <li>
                                       Constructive feedback helps us improve.
                                       How can we use this to do even better
                                       next time?
                                   </li>
                                   <li>
                                       Balancing helping others with taking
                                       care of yourself is important. How can
                                       we make sure you’re also feeling good?
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </li>
               </div>
               <div class="col-6 effective-study-box">
                   <li class="flex items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-90 h-auto object-contain" :src="'/images/reports-svg-images/Page17.svg'"
                               alt="" />
                       </div>

                   </li>
                   <div data-v-c08108fc="" class="flex justify-center items-center"><img data-v-c08108fc=""
                           class="w-100 h-auto object-contain" src="/images/reports-svg-images/Page19.svg" alt="">
                   </div>
                   <div data-v-c08108fc="" class="flex justify-center items-center mb-4"><img data-v-c08108fc=""
                           class="w-240 h-auto object-contain" src="/images/reports-svg-images/Page21.svg" alt="">
                   </div>
               </div>

               <p>
                   By using these phrases, parents can effectively motivate,
                   guide, and support Cautious-Supportive (CS) children in a
                   way that respects their natural tendencies while promoting
                   positive behaviour and growth.
               </p>
           </div>
       </div>
   </div>

   <!-- For D Style Type -->
   <div id="D" v-if="style == 'D'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a Dominant (D)
                               Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       I see you're ready to take on this
                                       challenge. Let's set some goals
                                       together!
                                   </li>
                                   <li>
                                       You have a great idea. How can we turn
                                       it into a plan?
                                   </li>
                                   <li>
                                       I appreciate your leadership in this
                                       project. Keep up the good work!
                                   </li>
                                   <li>
                                       You've made a quick decision here, and
                                       it's a good one. What’s the next step?
                                   </li>
                                   <li>
                                       Your energy is amazing. Let's channel it
                                       into this activity.
                                   </li>
                                   <li>
                                       You did an excellent job leading the
                                       group. What did you enjoy most about it?
                                   </li>
                                   <li>
                                       I'm impressed with how you handled that
                                       situation. How can we build on that
                                       success?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   I understand you have strong opinions. Let's
                                   take a moment to listen to others as well.
                               </li>
                               <li>
                                   Remember, teamwork means everyone gets a
                                   chance to contribute.
                               </li>
                               <li>
                                   It's great that you want to take charge, but
                                   let's also consider other ideas.
                               </li>
                               <li>
                                   I know you're eager to move quickly.
                                   Sometimes slowing down can help us avoid
                                   mistakes.
                               </li>
                               <li>
                                   It's important to follow directions. Let's
                                   discuss why these rules are in place.
                               </li>
                               <li>
                                   When you feel frustrated, try taking a deep
                                   breath and think through the problem.
                               </li>
                               <li>
                                   Let's work on being patient and waiting for
                                   our turn to speak.
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- For DC Style Type -->
   <div id="DC" v-if="style == 'DC'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a
                               Dominant-Cautious (DC) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       I love how you take charge. Let's set
                                       some goals to achieve together.
                                   </li>
                                   <li>
                                       You did an excellent job paying
                                       attention to the details. What’s the
                                       next step?
                                   </li>
                                   <li>
                                       Your determination and thoroughness are
                                       impressive. Let's see how we can use
                                       those skills in this new challenge.
                                   </li>
                                   <li>
                                       You planned that activity so well. How
                                       about we try something new next time?
                                   </li>
                                   <li>
                                       Your focus is amazing. Let's channel it
                                       into this project.
                                   </li>
                                   <li>
                                       I appreciate how you ensure everything
                                       is done correctly. Keep it up!
                                   </li>
                                   <li>
                                       Your careful planning makes everything
                                       run smoothly. Great job!
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It’s important to listen to others’ ideas
                                   too. What do you think your friends have to
                                   say?
                               </li>
                               <li>
                                   Teamwork means everyone’s voice is heard.
                                   How can we include everyone in the decision?
                               </li>
                               <li>
                                   Remember, it’s okay to make mistakes. What
                                   can we learn from this?
                               </li>
                               <li>
                                   Sometimes it helps to slow down and think
                                   things through carefully.
                               </li>
                               <li>
                                   We have rules for a reason. Let's talk about
                                   why they are important.
                               </li>
                               <li>
                                   When you feel overwhelmed, take a moment to
                                   breathe and prioritise your tasks.
                               </li>
                               <li>
                                   Let's work on being patient and waiting for
                                   our turn to speak.
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- For DI Style Type -->
   <div id="DI" v-if="style == 'DI'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a
                               Dominant-Influential (DI) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       Your leadership is inspiring! How can we
                                       use your ideas to help the class?
                                   </li>
                                   <li>
                                       You have a fantastic way of energising
                                       others. Let's channel that energy into
                                       this project.
                                   </li>
                                   <li>
                                       Your enthusiasm is contagious. How can
                                       we share your excitement with everyone?
                                   </li>
                                   <li>
                                       I love how you bring people together.
                                       How can we work as a team on this?
                                   </li>
                                   <li>
                                       You’re great at taking initiative.
                                       What’s the next step for our class
                                       project?
                                   </li>
                                   <li>
                                       Your creative ideas always stand out.
                                       How can we bring them to life?
                                   </li>
                                   <li>
                                       I appreciate how you motivate your
                                       classmates. What did you enjoy most
                                       about helping them?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It’s important to listen to others’ ideas
                                   too. How can we include everyone in the
                                   discussion?
                               </li>
                               <li>
                                   Remember, effective leaders also value
                                   teamwork. How can we make sure everyone is
                                   involved?
                               </li>
                               <li>
                                   Taking charge is great, but let’s also
                                   consider other perspectives.
                               </li>
                               <li>
                                   I know you’re excited, but sometimes it’s
                                   helpful to slow down and think it through.
                               </li>
                               <li>
                                   Following rules helps us all work together
                                   better. Let’s talk about why they matter.
                               </li>
                               <li>
                                   When you feel frustrated, try taking a deep
                                   breath and think about a positive solution.
                               </li>
                               <li>
                                   Patience is key. Let’s practice waiting our
                                   turn and listening to others.
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- For I Style Type -->
   <div id="I" v-if="style == 'I'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with an Influential
                               (I) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       I love your enthusiasm! Your energy
                                       makes our classroom a fun place to
                                       learn.
                                   </li>
                                   <li>
                                       You have wonderful ideas. How can we
                                       share them with the class?
                                   </li>
                                   <li>
                                       Your creativity is fantastic. Let’s find
                                       a way to bring your ideas to life!
                                   </li>
                                   <li>
                                       I appreciate how you included everyone
                                       in the activity. What did you enjoy most
                                       about it?
                                   </li>
                                   <li>
                                       Your positive attitude is contagious.
                                       How can we use it to inspire others?
                                   </li>
                                   <li>
                                       You did a great job sharing your
                                       thoughts with the class. What other
                                       ideas do you have?
                                   </li>
                                   <li>
                                       I'm impressed with your storytelling
                                       skills. How can we use that in our next
                                       project?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It's important to listen to others too. What
                                   do you think your classmates are trying to
                                   say?
                               </li>
                               <li>
                                   Remember, teamwork means everyone's ideas
                                   are valuable. How can we make sure everyone
                                   is heard?
                               </li>
                               <li>
                                   I know you have a lot to share, but let's
                                   give others a chance to speak too.
                               </li>
                               <li>
                                   Sometimes it helps to pause and think about
                                   what you want to say next.
                               </li>
                               <li>
                                   We have rules to follow so that everyone can
                                   have fun. Let’s talk about why they matter.
                               </li>
                               <li>
                                   If you feel overwhelmed, try taking a few
                                   deep breaths and think about a calm
                                   solution.
                               </li>
                               <li>
                                   Patience is important. Let's practice
                                   waiting our turn and listening carefully to
                                   others.
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- For ID Style Type -->
   <div id="ID" v-if="style == 'ID'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with an
                               Influential-Dominant (ID) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       Your enthusiasm is infectious! You bring
                                       so much energy to our class.
                                   </li>
                                   <li>
                                       You always have great ideas. How can we
                                       turn them into action?
                                   </li>
                                   <li>
                                       Your leadership is really impressive.
                                       Keep motivating your classmates!
                                   </li>
                                   <li>
                                       You did a fantastic job organising the
                                       activity. What’s your next goal?
                                   </li>
                                   <li>
                                       Your confidence really stands out. How
                                       can we use it for this new project?
                                   </li>
                                   <li>
                                       You were excellent at leading your
                                       group. How did it feel to be in charge?
                                   </li>
                                   <li>
                                       I’m really proud of how you handled that
                                       situation. What did you take away from
                                       it?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It’s important to listen to others. What do
                                   you think your friends want to share?
                               </li>
                               <li>
                                   Teamwork means we all work together. How can
                                   we make sure everyone is participating?
                               </li>
                               <li>
                                   Including everyone’s ideas is important. How
                                   can we encourage more sharing from your
                                   classmates?
                               </li>
                               <li>
                                   Sometimes it helps to take a moment to think
                                   things through before acting.
                               </li>
                               <li>
                                   Let’s discuss why our classroom rules are
                                   important and how they help us all.
                               </li>
                               <li>
                                   If you’re feeling frustrated, try taking a
                                   deep breath and thinking about the best way
                                   to approach the problem.
                               </li>
                               <li>
                                   Patience is key. How can we practice waiting
                                   our turn and considering what others have to
                                   say?
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- For IS Style Type -->
   <div id="IS" v-if="style == 'IS'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <div class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with an
                               Influential-Supportive (IS) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       Your enthusiasm brings so much energy to
                                       the class. Keep it up!
                                   </li>
                                   <li>
                                       You have a wonderful way of including
                                       everyone. How can we use that in our
                                       next project?
                                   </li>
                                   <li>
                                       Your creative ideas always impress me.
                                       What do you want to create next?
                                   </li>
                                   <li>
                                       I appreciate how you support your
                                       classmates. What did you enjoy most
                                       about helping them?
                                   </li>
                                   <li>
                                       Your positive attitude makes a big
                                       difference. How can we share more of
                                       your great ideas?
                                   </li>
                                   <li>
                                       You did a fantastic job working with
                                       your team. What other group activities
                                       would you like to try?
                                   </li>
                                   <li>
                                       I'm proud of how you handled that
                                       situation. What did you learn from it?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It's important to listen to others too. What
                                   do you think your friends are trying to say?
                               </li>
                               <li>
                                   Remember, teamwork means everyone's ideas
                                   are valuable. How can we make sure everyone
                                   feels included?
                               </li>
                               <li>
                                   I know you're excited, but let's take a
                                   moment to think about the best way to
                                   proceed.
                               </li>
                               <li>
                                   Sometimes it helps to pause and consider
                                   different options.
                               </li>
                               <li>
                                   We have rules to follow so that everyone can
                                   have fun. Let's talk about why they are
                                   important.
                               </li>
                               <li>
                                   If you feel overwhelmed, try taking a deep
                                   breath and thinking about what you can do
                                   next.
                               </li>
                               <li>
                                   Let's practice being patient and waiting for
                                   our turn to speak.
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- For S Style Type -->
   <div id="S" v-if="style == 'S'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <li class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a Supportive
                               (S) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       I love how caring and supportive you
                                       are. Your friends are lucky to have you!
                                   </li>
                                   <li>
                                       You did a great job helping out. How did
                                       it make you feel?
                                   </li>
                                   <li>
                                       Your patience and kindness are wonderful
                                       traits. Keep being you!
                                   </li>
                                   <li>
                                       You’re a great team player. How can we
                                       use your skills for this project?
                                   </li>
                                   <li>
                                       I appreciate how you include everyone.
                                       What do you think we should do next?
                                   </li>
                                   <li>
                                       Your calm and steady approach is so
                                       helpful. Thank you for being reliable.
                                   </li>
                                   <li>
                                       You have a special way of making others
                                       feel valued. How can we build on that?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It's important to share your thoughts too.
                                   What do you think about this?
                               </li>
                               <li>
                                   Remember, your ideas are just as important.
                                   Let’s hear what you have to say.
                               </li>
                               <li>
                                   Taking the lead can be fun too. How about
                                   you try it this time?
                               </li>
                               <li>
                                   Sometimes, it’s okay to say no. How can we
                                   set healthy boundaries?
                               </li>
                               <li>
                                   We have rules to help everyone get along.
                                   Let’s talk about why they matter.
                               </li>
                               <li>
                                   When you feel overwhelmed, it’s okay to take
                                   a break. What helps you relax?
                               </li>
                               <li>
                                   Patience is great, but don’t forget to speak
                                   up when you need something.
                               </li>
                           </ul>
                       </div>
                   </li>
               </div>
           </div>
       </div>
   </div>

   <!-- For SC Style Type -->
   <div id="SC" v-if="style == 'SC'">
       <div class="supporting-at-home p-6 mb-2">


           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                       <div data-v-c08108fc="" class="flex justify-center items-center mb-4"><img data-v-c08108fc="" class="w-80 h-auto object-contain" src="/images/reports-svg-images/Page20.svg" alt=""></div>
                       <!-- <div data-v-39cdb3b5="" class="flex justify-center items-center"><img data-v-39cdb3b5="" class="w-120 m-10 h-auto object-contain" src="/images/reports-svg-images/Page 12 newb.svg" alt=""></div> -->
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <li class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-6">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a
                               Supportive-Cautious (SC) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       I appreciate how thoughtful you are.
                                       Your consideration for others is
                                       wonderful.
                                   </li>
                                   <li>
                                       You are so reliable and trustworthy.
                                       People can always count on you.
                                   </li>
                                   <li>
                                       Your support means a lot to your
                                       friends. How can we help others more?
                                   </li>
                                   <li>
                                       I love how you always think things
                                       through carefully. Your attention to
                                       detail is impressive.
                                   </li>
                                   <li>
                                       You did a fantastic job helping with
                                       that project. What did you enjoy most
                                       about it?
                                   </li>
                                   <li>
                                       Your calm and thoughtful nature makes
                                       everyone feel comfortable. How can we
                                       use that in new situations?
                                   </li>
                                   <li>
                                       I’m proud of how you handled that
                                       situation with such care. What did you
                                       learn from it?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   It’s okay to make decisions more quickly.
                                   Trust yourself and go with your first
                                   thought.
                               </li>
                               <li>
                                   Sometimes, changes happen suddenly. Let’s
                                   practice how to adapt when things don’t go
                                   as planned.
                               </li>
                               <li>
                                   Your feelings are important, but it’s also
                                   okay to speak up when you need something.
                               </li>
                               <li>
                                   We all make mistakes. Let’s talk about what
                                   we can learn from this experience.
                               </li>
                               <li>
                                   Remember, it’s good to try new things even
                                   if they seem a bit challenging at first.
                               </li>
                               <li>
                                   Criticism can help us grow. What can we take
                                   from this feedback to improve?
                               </li>
                               <li>
                                   It’s important to balance your support for
                                   others with taking care of yourself. How can
                                   we make sure you’re also feeling good?
                               </li>
                           </ul>
                       </div>
                   </li>
               </div>
           </div>
       </div>
   </div>

   <!-- For SI Style Type -->
   <div id="SI" v-if="style == 'SI'">
       <div class="supporting-at-home p-6 mb-2">
           <div class="row">
               <div class="col-6 effective-study-box">
                   <div class="items-start space-x-4">
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'"
                               alt="" />
                       </div>
                       <div class="flex justify-center items-center">
                           <img class="w-120 h-auto object-contain" :src="'/images/reports-svg-images/Page 34.svg'"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="col-6 effective-study-box">
                   <li class="flex items-start space-x-4">
                       <div class="motivational-phrases p-6 rounded-lg mb-2">
                           <h2 class="text-3xl font-bold mb-2800">
                               Phrases for Teachers to Use with a
                               Supportive-Influential (SI) Child
                           </h2>
                           <p class="font-semibold text-blue-500 mb-2">
                               Motivating and Encouraging Phrases
                           </p>
                           <div class="">
                               <ul class="list-none list-inside  mb-6">
                                   <li>
                                       I love how kind you are to everyone.
                                       Your kindness makes a big difference.
                                   </li>
                                   <li>
                                       You have a wonderful way of including
                                       everyone. How can we use that more
                                       often?
                                   </li>
                                   <li>
                                       Your creativity always amazes me. What
                                       new project do you want to start?
                                   </li>
                                   <li>
                                       You did a fantastic job helping your
                                       friends. What did you enjoy most about
                                       it?
                                   </li>
                                   <li>
                                       Your positive attitude brightens
                                       everyone’s day. How can we share it even
                                       more?
                                   </li>
                                   <li>
                                       You’re so good at bringing people
                                       together. What other activities can we
                                       try?
                                   </li>
                                   <li>
                                       I'm really proud of how you handled that
                                       situation. What did you learn from it?
                                   </li>
                               </ul>
                           </div>

                           <p class="font-semibold text-blue-500 mb-2">
                               Corrective and Guidance Phrases
                           </p>
                           <ul class="list-none list-inside ">
                               <li>
                                   Remember, it’s okay to speak up for
                                   yourself. How do you feel about sharing your
                                   ideas?
                               </li>
                               <li>
                                   It’s important to also think about what you
                                   need. How can we make sure you’re heard?
                               </li>
                               <li>
                                   Sometimes making a decision can be hard, but
                                   trust yourself. What do you think is best?
                               </li>
                               <li>
                                   Everyone makes mistakes. Let’s talk about
                                   what we can learn from this.
                               </li>
                               <li>
                                   It’s okay to say no if you need to. How can
                                   we practice being more assertive?
                               </li>
                               <li>
                                   Criticism can be tough, but it helps us
                                   grow. What can we take from this feedback?
                               </li>
                               <li>
                                   Your feelings matter too. How can we balance
                                   what you want with what others need?
                               </li>
                           </ul>
                       </div>
                   </li>
               </div>
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

ul>li {
   margin-top: 18px;
}

p,
ul>li,
ol>li,
strong,
.text-base {
   font-size: 1.125rem;
   line-height: 1.75rem;
}

strong {
   font-size: 19px;
}

p.text-blue-500 {
   font-size: 23px;
   font-weight: bold;
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

   h2, h3{
       font-size: 1.5rem !important;
   }

   /* Adjust image container on mobile */
   .col-6 .flex.justify-center.items-center {
       margin: 1rem 0;
   }

   p{
       font-size: 18px !important;
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
   name: "GuidanceForTeacherThird",
   layout: AssessmentTypes,
   props: {
       style: String,
       childName: String,
       image: String,
   },
};
</script>
