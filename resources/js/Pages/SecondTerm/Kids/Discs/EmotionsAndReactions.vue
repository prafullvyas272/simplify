<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Understanding Their Emotions and Reactions</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-12">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/36.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-12">
                <p class="my-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                    <span v-html="topHeading"></span>
                </p>
            </div>

        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    You might notice:
                </h4>
            </div>
            <div class="row my-1" v-for="(noticePoint, index) in reportData[discStyle]?.noticePoints">
                <div class="col-1">
                    <div class="flex justify-center items-center">
                        <img class="ball" :src="'/images/second-term/kids-disc-images/37.png'" alt="" />
                    </div>
                </div>
                <div class="col-9 flex items-center">
                    <p class="font-bold">
                        {{ noticePoint }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/39.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-12 flex items-center">
                <p class="mb-4"
                    v-for="(noticePointBottomHeading, index) in reportData[discStyle]?.noticePointBottomHeadings">
                    {{ noticePointBottomHeading }}
                </p>

            </div>
            <p class="mb-4 text-blue-400 font-bold">
                Helping {{ childName }} understand and name emotions is an important part of their growth. You can
                support this by:
            </p>
        </div>

        <div class="row p-6">
            <div class="col-12">
                <div class="row p-6">
                    <div class="col-6 yellow-cloud"
                        v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints" :key="index">
                        <div class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
                            <div class="text-black px-4 py-2 rounded">
                                <p class="mb-4 font-bold text-center px-20 my-20">
                                    {{ supportPoint }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="relative  flex items-center justify-center text-white pink-board-image">
                <div class="text-black py-2 rounded px-20">
                    <p class="my-4 font-bold px-20"
                        v-for="(supportPointBottomHeading, index) in reportData[discStyle]?.supportPointBottomHeadings"
                        :key="index">
                        <span v-html="supportPointBottomHeading"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'EmotionsAndReactions',
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
                        `Children with an SI style often experience emotions deeply and are very aware of how others are
                        feeling too. They care a lot about keeping the atmosphere light and positive, and they’re often
                        the first to comfort a friend or notice when someone seems upset. When they feel calm and
                        connected, their emotions are steady and open.`,

                        `However, they may keep their own feelings to themselves if they think it will cause tension.
                        They might pretend to be okay just to keep the peace, or feel quietly upset if they feel left
                        out, ignored, or criticised.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Responding gently when others are upset`,
                        `Becoming quieter or withdrawn when something feels off`,
                        `Worrying about how others are feeling or reacting`,
                        `Avoiding emotional conflict, even if they’re struggling inside`,
                        `Needing time and reassurance before sharing how they really feel`

                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from support that helps them express their emotions openly and confidently. They don’t need to change how they feel - just feel safe enough to share and understand their reactions more clearly.`
                    ],
                    supportPoints: [
                        `Asking calm questions like, “Was something bothering you just now?”`,
                        `Letting them know it’s okay to feel upset or unsure`,
                        `Creating quiet space to talk after a difficult moment`,
                        `Modelling emotional honesty by sharing how you feel too`

                    ],
                    supportPointBottomHeadings: [
                        `With the right support, ` + this.childName + ` can learn to manage emotions in a way that’s healthy and respectful - staying true to their kind nature while also feeling understood and supported.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style often keep their emotions to themselves. They may feel things deeply but prefer to process those feelings quietly. They are more likely to stay calm on the outside, even when something is bothering them - and they may avoid sharing emotions if they’re unsure how others will react.`,
                        `They tend to become uneasy with sudden changes, raised voices, or situations that feel unpredictable. Instead of reacting outwardly, they may withdraw, become very quiet, or focus on doing things ‘just right’ as a way to feel secure.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Seeming calm, even when something is upsetting them`,
                        `Becoming quieter when the environment feels tense`,
                        `Avoiding conversations about how they feel`,
                        `Reacting strongly to changes in plans or routines`,
                        `Needing time and reassurance to feel settled again`
                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from having a safe space to talk, and from gentle questions that help them name and understand their feelings. With regular check-ins and emotional support, they’re more likely to open up in their own time.`
                    ],
                    supportPoints: [
                        `Checking in calmly with questions like, “How did that feel for you?”`,
                        `Letting them know that it’s okay to feel unsure, upset, or worried`,
                        `Creating quiet moments to talk one-on-one`,
                        `Modelling calm emotional expression and showing that it’s normal`
                    ],
                    supportPointBottomHeadings: [
                        `With this kind of support, `+ this.childName +` can build emotional awareness and confidence - learning that they can share how they feel, even if they’re used to staying quiet.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style often feel things deeply but may not always show it outwardly. They tend to keep their emotions to themselves, especially if they think it might upset someone else or cause conflict. Instead of reacting quickly, they might hold things in, stay quiet, or withdraw when something feels uncomfortable.`,
                        `These children are usually very aware of the emotions around them. They can pick up on tension or changes in mood, and they may try to keep the peace by being extra helpful or agreeable. While this sensitivity can be a strength, it also means their own feelings can get overlooked - even by themselves.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Hiding their feelings to avoid upsetting others`,
                        `Becoming quiet or withdrawn when something is wrong`,
                        `Feeling nervous in tense or uncertain situations`,
                        `Trying to smooth over disagreements or keep everyone happy`,
                        `Needing reassurance but not always asking for it`
                    ],
                    noticePointBottomHeadings: [
                        `These children don’t usually show big emotional reactions on the surface. But just because they stay calm doesn’t mean they aren’t feeling something strongly inside. Helping `+this.childName+` understand and talk about their emotions gives them the tools to cope more confidently.`
                    ],
                    supportPoints: [
                        `Giving them words to describe what they’re feeling, like “It sounds like you felt left out” or “That seems frustrating”`,
                        `Showing that it's okay to feel disappointed, sad, or confused, and that slowing down to talk about it is useful`,
                        `Encouraging a short pause before reacting, especially when something feels unfair or unexpected`,
                        `Modelling how to talk about feelings and check in on others too`
                    ],
                    supportPointBottomHeadings: [
                        `S-style children are often seen as quiet or easy-going, but they need just as much emotional support as any other child. With encouragement and space to reflect, `+this.childName+` can learn to manage big feelings in a way that builds both strength and empathy.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style often feel emotions deeply and care a lot about how others are feeling too. They’re sensitive to tone, expression, and whether someone seems upset or pleased - and they may adjust their behaviour to keep others happy. When they feel safe and supported, their emotions are warm and open. But when they feel uncertain or left out, they may become quiet, withdrawn, or worried.`,
                        `They may not always talk about what’s bothering them, especially if they think it might upset someone. Instead, they might go along with things or try to fix the situation through kindness, even if they feel uncomfortable inside.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Reacting strongly to feeling left out or unappreciated`,
                        `Showing concern when others are upset`,
                        `Holding in their own feelings to avoid causing upset`,
                        `Becoming quiet or withdrawn when anxious`,
                        `Looking for reassurance through affection or praise`
                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from learning that it’s okay to express their own feelings, even when they’re difficult. Helping them feel safe to open up supports both their emotional growth and their confidence.`
                    ],
                    supportPoints: [
                        `Asking gentle questions like, “What were you feeling just then?”`,
                        `Letting them know it’s okay to feel sad, annoyed, or confused`,
                        `Reassuring them that sharing feelings won’t upset others - it helps`,
                        `Showing how to manage emotions without hiding them`
                    ],
                    supportPointBottomHeadings: [
                        `With consistent support, `+this.childName+` can learn to express their feelings in a way that’s both caring and clear - helping them feel understood and connected.`

                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> tend to feel emotions strongly and show them openly. Whether they’re happy, frustrated, excited, or disappointed, it’s likely to show right away - through their words, tone, or body language. They don’t usually hide how they feel and may react in the moment without thinking through the situation first.`,
                        `They may get frustrated when things feel unfair, too slow, or when they don’t feel heard. On the other hand, they light up quickly when they’re praised, included, or allowed to take the lead. Their emotions often shift quickly too - they might be upset one minute and laughing the next.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Showing feelings through voice, movement, or expression`,
                        `Responding strongly in the moment, then moving on quickly`,
                        `Getting frustrated if they feel ignored or left out`,
                        `Becoming louder or more assertive when upset`,
                        `Needing help recognising how their reactions affect others`,
                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from learning how to pause and reflect before reacting. They don’t need to hide their emotions - just understand how to respond in ways that are respectful and considered.`
                    ],
                    supportPoints: [
                        `Asking, “What were you feeling just then?” or “What do you think made that so frustrating?”`,
                        `Talking about how emotions can affect others in a group`,
                        `Modelling calm responses and explaining your own feelings`,
                        `Letting them take a moment to reset before talking about what happened`
                    ],
                    supportPointBottomHeadings: [
                        `With practice, `+this.childName+` can learn to manage strong feelings in a way that builds trust and connection - while still keeping their expressive and passionate nature intact.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> tend to feel emotions strongly and express them outwardly. You’re likely to know when `+this.childName+` is happy, excited, disappointed, or upset, because they’ll show it through their words, tone, and body language. These children are often open with how they feel and may look to others for reassurance or attention when emotions run high.`,
                        `While this openness can be helpful, it can also lead to emotional ups and downs throughout the day. A moment of praise might lift their mood completely, while a small comment or feeling left out can feel like a big blow. `+this.childName+` may need help learning how to recognise and manage these shifts.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Expressing feelings clearly and often`,
                        `Becoming excited quickly and showing strong enthusiasm`,
                        `Feeling discouraged easily if they don’t feel noticed or liked`,
                        `Seeking validation or attention when unsure`,
                        `Reacting strongly to praise, tone of voice, or facial expressions`,
                    ],
                    noticePointBottomHeadings: [
                        `These children don’t usually hide how they’re feeling. Once something has passed, they often move on quickly and expect others to do the same. While this can be helpful in some situations, it also means they might overlook how their actions or words affected those around them, especially if someone else is still feeling upset after a disagreement.`
                    ],
                    supportPoints: [
                        `Giving them words to describe what they’re feeling, like “It sounds like you felt left out” or “That seems frustrating”`,
                        `Showing that it's okay to feel disappointed, sad, or confused, and that slowing down to talk about it is useful`,
                        `Encouraging a short pause before reacting, especially when something feels unfair or unexpected`,
                        `Modelling how to apologise or reflect when a reaction may have come across too strongly`
                    ],
                    supportPointBottomHeadings: [
                        `I-style children are often seen as bubbly or carefree, but underneath, they need just as much emotional support as any other child. With encouragement and space to reflect, `+this.childName+` can learn to manage big feelings in a way that builds both strength and empathy.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> often experience emotions strongly and react quickly. They may show excitement, frustration, or enthusiasm right away, especially when something feels important to them. They usually don’t hold back - whether they’re happy, disappointed, or annoyed, it’s likely to show.`,
                        `They tend to move on quickly from emotions, but in the moment, reactions can be intense. If they feel ignored, misunderstood, or restricted, they may respond with raised voices, dramatic expressions, or stubbornness. On the other hand, they light up when praised, included, or given freedom to act.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Showing emotions openly and instantly`,
                        `Getting frustrated when they feel slowed down or corrected`,
                        `Reacting strongly to praise or disapproval`,
                        `Recovering quickly after an outburst`,
                        `Sometimes missing how their reactions affect others`,
                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from support in learning how to pause and reflect before reacting. They don’t need to bottle up their feelings - just to become more aware of how they express them and how others might feel in response.`
                    ],
                    supportPoints: [
                        `Asking, “What were you feeling just then?” to help them reflect`,
                        `Reassuring them that strong feelings are normal, but how they respond matters`,
                        `Modelling calm reactions during your own emotional moments`,
                        `Reminding them to notice how others might feel in the situation`
                    ],
                    supportPointBottomHeadings: [
                        `DI-style children bring energy and honesty to their emotional world. With time and support, `+this.childName+` can learn to channel strong feelings into responses that are both expressive and thoughtful.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> may not show their emotions openly, but that doesn’t mean they aren’t feeling something strongly. They tend to keep their reactions contained and may appear serious or unaffected, even when something bothers them. Rather than talking about their emotions, they’re more likely to focus on what went wrong or what needs to be fixed.`,
                        `They often become frustrated when things feel unfair, slow, or disorganised. They may express this with short, sharp words or by withdrawing to think things through alone. While they may not seek comfort in obvious ways, they do benefit from calm support and clear conversations when emotions start to build.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Hiding frustration or showing it through impatience`,
                        `Struggling with situations that feel illogical or unpredictable`,
                        `Keeping worries or disappointment to themselves`,
                        `Becoming quiet, resistant, or overly critical when upset`,
                        `Focusing on what’s wrong instead of how they feel`,
                    ],
                    noticePointBottomHeadings: [
                        `These children don’t always want to talk about feelings, but they still need help understanding and managing them. Supporting emotional awareness helps them respond with more flexibility and less pressure to always stay in control.`
                    ],
                    supportPoints: [
                        `Giving them space to cool down before talking`,
                        `Describing what you observe: “It seemed like that really frustrated you”`,
                        `Encouraging problem-solving and emotional reflection together`,
                        `Showing that all feelings are valid - even when they’re uncomfortable`
                    ],
                    supportPointBottomHeadings: [
                        `With time and the right support, `+this.childName+` can learn to handle strong emotions in a way that protects their sense of control while also building empathy and connection.`
                    ],
                },
                C: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeadings: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeadings: [

                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeadings: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeadings: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeadings: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeadings: [

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


<style scoped>
.ball {
    height: 58px;
}

.board-image {
    background-image: url("/images/second-term/kids-disc-images/41.svg");
    background-size: 930px;
    background-position: center;
    background-repeat: no-repeat;
}

.pink-board-image {
    background-image: url("/images/second-term/kids-disc-images/42.svg");
    background-size: 1030px;
    background-position: center;
    background-repeat: no-repeat;
}
</style>