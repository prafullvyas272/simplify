<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Helpful Words to Use (Encouragement & Guidance)</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-6">
                <p class="my-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                    <span v-html="topHeading"></span>
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/96.svg'"
                        alt="" />
                </div>
            </div>
        </div>


        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Here are some example phrases that tend to work well with {{ discStyle }}-style children like {{ childName }}.
                </h4>
            </div>
        </div>

        <!-- Encouraging phrases -->
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Encouraging phrases:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/98.png'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <p class="my-4 font-bold text-center"
                        v-for="(encouragingPhrase, index) in reportData[discStyle]?.encouragingPhrases" :key="index">
                        "<span v-html="encouragingPhrase"></span>"
                    </p>
                </div>
            </div>
            <div class="row">
                <p class="my-4">
                    <span v-html="reportData[discStyle]?.encouragingPhraseBottomHeading[0]"></span>
                </p>
            </div>
        </div>


        <!-- Guiding phrases -->
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Guiding phrases:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="my-4 font-bold text-center"
                        v-for="(guidingPhrase, index) in reportData[discStyle]?.guidingPhrases" :key="index">
                        "<span v-html="guidingPhrase"></span>"
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/98.png'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="my-4" v-for="(guidingPhraseBottomHeading, index) in reportData[discStyle]?.guidingPhraseBottomHeading" :key="index">
                    <span v-html="guidingPhraseBottomHeading"></span>
                </p>
            </div>
        </div>

        <div class="row p-6">
            <div class="flex justify-center items-center">
                <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/98.svg'" alt="" />
            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'HelpfulWords',
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        discStyle: String,
    },
    data() {
        return {
            reportData: {
                SI: {
                    topHeadings: [
                        `The words we use with children matter. For a child with an SI style, gentle, warm, and reassuring language works best. They respond well to encouragement that recognises their kindness, cooperation, and steady effort. They also benefit from being reminded that it’s okay to speak up, take the lead, or try something new - even when it feels unfamiliar.`,
                        `They may be more concerned with getting things “right” or keeping others happy, so a calm, confidence-building tone goes a long way.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `You made a real difference by helping today.`,
                        `I saw how thoughtful you were - thank you for being so kind.`,
                        `You stayed calm and focused - that really helped.`,
                        `I liked how you included everyone - that’s an important strength.`,
                        `You’ve got a quiet confidence that others really look up to.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases are most effective when linked to specific actions. Over time, they help reinforce self-belief and steady confidence.`
                    ],
                    guidingPhrases: [
                        `It’s okay to say how you really feel.`,
                        `You can take the lead - we trust your judgement.`,
                        `You don’t have to agree just to keep the peace.`,
                        `Trying something new doesn’t mean you’ll lose what feels familiar.`,
                        `You’re allowed to say no - kindly and clearly.`,

                    ],
                    guidingPhraseBottomHeading: [
                        `With kind, steady guidance, ` + this.childName + ` can grow into someone who leads with care, speaks with confidence, and supports others without losing sight of themselves.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style respond well to gentle, thoughtful communication. They’re unlikely to ask for praise, but they appreciate being noticed - especially when their quiet effort is recognised. They also benefit from calm guidance that gives them permission to try, even if they’re not completely sure.`,
                        `The right words can help `+ this.childName +` feel more confident in their abilities and more willing to step out of their comfort zone - without losing the steady nature that helps them thrive.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `You were so careful and focused - I noticed that.`,
                        `You took your time and got it just right.`,
                        `You stuck with it even when it wasn’t easy - that shows real effort.`,
                        `I can always count on you to do things thoughtfully.`,
                        `You didn’t rush, and that made a big difference.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases are especially helpful when connected to specific actions - reinforcing that their steady, quiet work has value.`
                    ],
                    guidingPhrases: [
                        `It’s okay to try, even if you’re not sure yet.`,
                        `You don’t need to get it perfect - just give it a go.`,
                        `Let’s break this into steps and do one at a time.`,
                        `You can say no kindly if something doesn’t feel right.`,
                        `Your ideas matter, even if they’re different from others.`,
                    ],
                    guidingPhraseBottomHeading: [
                        `With this kind of steady encouragement and calm guidance, `+ this.childName + ` can build quiet confidence - learning to trust their instincts, speak up when needed, and take on more without losing their natural care.`
                    ],
                },
                S: {
                    topHeadings: [
                        `The words we use with children matter. For a child with a Supportive style, gentle, warm, and reassuring language works best. These children are often tuned in to how others feel and want to keep the peace. They respond well to calm encouragement that shows appreciation for their effort and kindness.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `I noticed how kind you were today.`,
                        `You really helped make things go smoothly.`,
                        `You stayed calm and kept trying - well done.`,
                        `I saw that you included your friend. That was thoughtful.`,
                        `You didn’t rush - you took your time and did it well.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases work best when they’re linked to real moments. Try to highlight not just the action, but the steady qualities behind it - like patience, thoughtfulness, or quiet leadership.`
                    ],
                    guidingPhrases: [
                        `It’s okay to say what you need.`,
                        `You can speak up - your ideas matter.`,
                        `Let’s take a moment to talk it through.`,
                        `How did that feel for you?`,
                        `You don’t have to do it alone - it’s okay to ask for help.`,
                    ],
                    guidingPhraseBottomHeading: [
                        `It’s important not to push them too quickly or overlook their quiet needs. These children thrive when they feel safe and supported, so kind and consistent language goes a long way.`,
                        `Over time, this kind of language builds not just confidence, but self-awareness - helping `+this.childName+` learn how to use their calm, kind nature to grow in strength and independence.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `The words we use with children matter. For a child with an IS style, warm, gentle, and encouraging language works best. They respond well to kind praise, especially when it recognises their thoughtfulness, helpfulness, or quiet effort. Because they often care deeply about how others feel, they benefit from reassurance and gentle reminders that it’s okay to speak up and put themselves forward.`,
                        `They may hold back to avoid making mistakes or causing upset - so supportive, confidence-building language helps them grow.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `You really made a difference by being kind today.`,
                        `I noticed how thoughtful you were - that really helped.`,
                        `You were brave to share your idea.`,
                        `You worked quietly and carefully - that’s something to be proud of.`,
                        `People feel good around you - and that’s a real strength.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases work best when linked to genuine moments. This helps build a stronger sense of self and quiet confidence.`
                    ],
                    guidingPhrases: [
                        `It’s okay to say what you really think - even if it’s different.`,
                        `You don’t need to say yes just to keep others happy.`,
                        `You can try - it doesn’t have to be perfect.`,
                        `What would you like to do this time?`,
                        `Let’s practice speaking up together.`,
                    ],
                    guidingPhraseBottomHeading: [
                        `With encouragement and calm support, `+ this.childName +` can learn to express themselves more clearly and confidently - while still staying true to their naturally caring and inclusive nature.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `The words we use with children matter. For a child with an <b>ID style</b>, positive, upbeat, and clear language works best. They respond well to praise - especially when it highlights their effort, enthusiasm, or leadership. They also benefit from reminders that being thoughtful, patient, and consistent is just as important as being expressive or bold.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `You really brought great energy to that.`,
                        `I noticed how you helped get everyone involved.`,
                        `You came up with a fun idea - and you saw it through.`,
                        `You stayed with it, even when it got a bit slow - that’s real effort.`,
                        `You made a big difference by sticking with the plan.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases work best when they’re specific and connected to real actions. ID-style children enjoy being recognised for their impact - especially when it’s tied to growth or follow-through.`
                    ],
                    guidingPhrases: [
                        `Let’s take a breath before jumping in.`,
                        `Being a good leader means knowing when to listen too.`,
                        `What’s your plan to finish this once you’ve started?`,
                        `It’s okay to wait your turn - your idea will still matter.`,
                        `Let’s think about how others might feel in this moment.`,
                    ],
                    guidingPhraseBottomHeading: [
                        `They often speak and act quickly, so language that helps them pause, reflect, and include others supports their development.`,
                        `Over time, this mix of praise and redirection helps `+this.childName+` become someone who leads with both enthusiasm and care - using their voice in ways that lift up the people around them.`
                    ],
                },
                I: {
                    topHeadings: [
                        `The words we use with children matter. For a child with an <b>Influential style</b>, language that feels warm, enthusiastic, and encouraging works best. These children are motivated by connection, praise, and the chance to make others smile. They respond well to words that recognise their positive energy and remind them gently of what’s expected.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `I love how you included everyone just then.`,
                        `You brought so much fun to that activity.`,
                        `You made a big effort to cheer up your friend - that was kind.`,
                        `You kept going even when things got tricky. Well done.`,
                        `You really helped make the day more fun for everyone.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases work best when they’re linked to real moments. Try to highlight not just what happened, but the positive qualities behind it - like kindness, effort, or confidence.`
                    ],
                    guidingPhrases: [
                        `Let’s slow down and think about what comes next.`,
                        `Can you use your words to explain that more clearly?`,
                        `What would help you stay focused right now?`,
                        `How do you think your friend felt during that moment?`,
                        `What’s something kind you could do next time?`
                    ],
                    guidingPhraseBottomHeading: [
                        `It’s important not to dampen their spirit or excitement, but to shape it. These children thrive on connection and feedback, so guiding them in a kind but clear way helps them stay on track while still feeling encouraged.`,
                        `Over time, this kind of language builds not just confidence, but self-awareness - helping `+this.childName+` learn how to use their personality to build strong, thoughtful relationships.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `The words we use with children matter. For a child with a <b>DI style</b>, upbeat, clear, and direct language works best. These children thrive on praise and recognition, especially when it focuses on their effort, leadership, or progress. At the same time, they respond well to firm but kind reminders that help them slow down and reflect.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `I really liked the way you took the lead - that helped us get started.`,
                        `You stayed focused even when it got tricky - that shows real effort.`,
                        `You brought great energy to that - and you helped others join in too.`,
                        `You had a strong idea, and you gave everyone a chance to speak.`,
                        `You finished what you started - that’s something to be proud of.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases work best when connected to real actions and progress. DI-style children like to be recognised, and your words can help them feel seen for more than just their personality.`
                    ],
                    guidingPhrases: [
                        `Let’s take a second to think this through.`,
                        `Being a good leader means helping others feel heard.`,
                        `Take your time - you don’t have to rush to get it right.`,
                        `Let’s listen first, then share your idea.`,
                        `What’s one way we can include others in this?`
                    ],
                    guidingPhraseBottomHeading: [
                        `This kind of language reminds them that thinking and listening are just as valuable as acting quickly or taking charge.`,
                        `Over time, using a mix of praise and gentle direction helps `+this.childName+` grow into someone who leads with both confidence and care - someone who acts with energy, but also listens with intention.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `The words we use with children matter. For a child with a <b>DC style</b>, direct, respectful, and thoughtful language works best. They value being spoken to clearly and treated as capable. Praise is most meaningful when it recognises effort, precision, or smart thinking - rather than general compliments.`,
                        `At the same time, they benefit from reminders that not everything needs to be perfect, and that working with others is just as important as working independently.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `You really thought that through - great planning.`,
                        `I can see how much care you put into that.`,
                        `You asked a smart question - that helped clarify things.`,
                        `You stayed focused even when it got tricky - well done.`,
                        `You did that your way, and it worked really well.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases work best when linked to specific actions. DC-style children take pride in their thinking and effort, so noticing the process matters as much as the outcome.`
                    ],
                    guidingPhrases: [
                        `It’s okay to try before everything is perfect.`,
                        `Let’s hear what others think too - there might be more than one good way.`,
                        `Not everything has a right answer - what do you think is the best option?`,
                        `You don’t have to get it right straight away - we can work through it.`,
                        `Let’s step back for a second and see the bigger picture.`,
                    ],
                    guidingPhraseBottomHeading: [
                        `These children don’t need softening - but helping them stay open and reflective gives them even more strength as they grow.`,
                        `Over time, a mix of recognition and calm redirection helps `+this.childName+` grow into someone who thinks with clarity, acts with purpose, and communicates with both confidence and consideration.`
                    ],
                },
                C: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [

                    ],
                    encouragingPhraseBottomHeading: [

                    ],
                    guidingPhrases: [

                    ],
                    guidingPhraseBottomHeading: [

                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [

                    ],
                    encouragingPhraseBottomHeading: [

                    ],
                    guidingPhrases: [

                    ],
                    guidingPhraseBottomHeading: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [

                    ],
                    encouragingPhraseBottomHeading: [

                    ],
                    guidingPhrases: [

                    ],
                    guidingPhraseBottomHeading: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [

                    ],
                    encouragingPhraseBottomHeading: [

                    ],
                    guidingPhrases: [

                    ],
                    guidingPhraseBottomHeading: [

                    ],
                },
            }
        };

    },
    methods: {
        getHelpingIdeasImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.helpFullIdeas[index].img;
        },
        getTopHeadingImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.topHeadingImages[index];
        },
    },
};
</script>


<style>
.box-img {
    height: 400px;
    /* or whatever works for you */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 8px;
}

.board-image {
    background-image: url("/images/second-term/kids-disc-images/86.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.board-image-2 {
    background-image: url("/images/second-term/kids-disc-images/95.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.box-img-1 {
    background-image: url("/images/second-term/kids-disc-images/150.png");
}

.box-img-2 {
    background-image: url("/images/second-term/kids-disc-images/151.png");
}

.box-img-3 {
    background-image: url("/images/second-term/kids-disc-images/152.png");
}

.box-img-4 {
    background-image: url("/images/second-term/kids-disc-images/153.png");
}

.box-img-5 {
    background-image: url("/images/second-term/kids-disc-images/154.png");
}
</style>