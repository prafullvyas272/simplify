<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Understanding the {{ discStyle }} Style</h1>
        </div>
    </div>

    <div id="report-content" class="report-content">
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-12">
                    <p v-for="topHeading in reportData[discStyle]?.topHeadings" class="mb-4">
                        {{ topHeading }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-blue-800">
                    Some common traits of the {{ discStyle }} style include:
                </h4>
                <div class="col-6">
                    <ul class="list-disc space-y-3">
                        <li v-for="commonTrait in reportData[discStyle]?.commonTraits.slice(0,3)">
                            {{ commonTrait }}
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/12.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/14.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="list-disc space-y-3">
                        <li v-for="commonTrait in reportData[discStyle]?.commonTraits.slice(3, commonTraitsLength)">
                            {{ commonTrait }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <p v-for="bottomHeadings in reportData[discStyle]?.bottomHeadings" class="mb-4">
                        {{ bottomHeadings }}
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/13.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'UnderstandingStyle',
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
                        `Children with an SI style are warm, friendly, and easy to be around. They tend to enjoy
                        connecting with others and often care deeply about keeping people happy. These children like to
                        feel included and valued, and they often bring a mix of kindness and enthusiasm to the spaces
                        they’re in.`,
                        `They are usually more focused on harmony than leadership, and they enjoy group activities that
                        feel familiar, encouraging, and positive. While they may be naturally social and expressive,
                        they also prefer things to go smoothly and might shy away from conflict or high-pressure
                        settings.`
                    ],
                    commonTraits: [
                        `Being gentle, kind, and friendly with others`,
                        `Enjoying group play and working with people they trust`,
                        `Preferring things to stay calm, fair, and familiar`,
                        `Wanting to be liked and included by others`,
                        `Speaking up in a relaxed setting, but holding back when unsure`,
                        `Worrying about hurting feelings or doing something wrong`,
                    ],
                    bottomHeadings: [
                        `These children do best in environments that feel emotionally safe and socially engaging.`,
                        `They may need encouragement to speak up when things feel unfair or to try new things without worrying too much about others’ opinions.`,
                        `With steady encouragement, ` + this.childName + ` can become someone who connects with others in thoughtful, meaningful ways - while also learning to speak up and shine with growing confidence.`,
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are calm, thoughtful, and steady. They tend to prefer routines, quiet environments, and tasks that are clear and well-organised. These children are careful with their words and actions and usually take their time before trying something new. They are dependable and gentle, often putting effort into doing things properly and avoiding mistakes.`,
                        `They may not speak up unless they feel very sure, and they usually avoid conflict or sudden changes. While they are often very capable, they may need encouragement to believe in themselves and to feel confident trying new approaches.`,
                    ],
                    commonTraits: [
                        `Working quietly and carefully`,
                        `Preferring predictability and structure`,
                        `Being cautious with new or unfamiliar tasks`,
                        `Avoiding loud, rushed, or high-pressure situations`,
                        `Wanting to do things correctly and avoid getting things wrong`,
                        `Showing kindness through consistency rather than big gestures`,
                    ],
                    bottomHeadings: [
                        `These children do best when given clear expectations, calm encouragement, and time to think. They may need gentle support in expressing their ideas, managing change, and accepting that getting something wrong is part of learning.`,
                        `With steady guidance, `+ this.childName +` can grow into someone who is quietly confident, dependable, and thoughtful - bringing care and precision to everything they do.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style are often gentle, caring, and easy to be around. They like to feel safe, included, and connected to others. These children tend to enjoy steady routines, familiar people, and calm environments where they know what to expect.`,
                        `They may not seek the spotlight, but they usually notice how others are feeling and will offer help or kindness without being asked. They may take time to warm up in new situations, but once settled, they’re reliable and thoughtful. Their quiet nature can sometimes be mistaken for shyness, but often they are simply reflective and content with a steady pace.`,
                    ],
                    commonTraits: [
                        `Kind and considerate towards others`,
                        `Prefers routines, predictability, and a steady pace`,
                        `Avoids conflict or loud, high-energy situations`,
                        `Works well in groups but may not want to lead`,
                        `Finds comfort in familiar settings and relationships`,
                        `May keep their own feelings to themselves`,
                    ],
                    bottomHeadings: [
                        `These children do best when they feel safe, valued, and not rushed. They may need more time to adjust to change, but they are dependable, loyal, and quietly confident once they feel settled.`,
                        `With support and encouragement, `+ this.childName +` can grow into a calm, reliable, and kind individual who brings steadiness and care to the people and places around them.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style are often warm, expressive, and easy to be around. They enjoy connecting with others and tend to be kind, helpful, and talkative. These children like to feel included and to make others feel the same way. They often bring a cheerful presence to group settings and enjoy making friends, sharing ideas, or supporting their classmates.`,
                        `They may go along with what others want to avoid conflict or upsetting anyone. Because they care so much about being liked, they might say yes when they don’t want to or hold back their own ideas if they feel unsure. At the same time, they often lift others up and create a sense of harmony in social situations.`,
                    ],
                    commonTraits: [
                        `Enjoying group settings, teamwork, and conversation`,
                        `Being thoughtful and gentle with others`,
                        `Wanting to feel liked, included, and appreciated`,
                        `Speaking up in friendly settings, but more reserved in unfamiliar ones`,
                        `Avoiding conflict or strong disagreement`,
                        `Enjoying fun, social activities more than structured or solitary ones`,
                    ],
                    bottomHeadings: [
                        `These children do best when they feel secure and supported. They may need help learning to speak up for themselves, manage worry about what others think, and stay focused when a task feels slow or unexciting.`,
                        `With encouragement, `+this.childName+` can become someone who builds strong, caring connections - while also learning to speak with confidence and act with quiet strength.`,
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an ID style are bold, energetic, and full of personality. They tend to be talkative, playful, and confident - often leading the way in both social and active settings. They enjoy being around others and are quick to share ideas, take initiative, and get involved. Their natural mix of charm and determination means they often influence those around them without even trying.`,
                        `They may come across as both imaginative and assertive. They often want to lead but also want to be liked, which can sometimes lead to impatience or frustration when others don’t follow along. They enjoy fast-moving, engaging activities and may lose interest if things feel slow, repetitive, or overly structured.`
                    ],
                    commonTraits: [
                        `Expressive, enthusiastic, and eager to speak up`,
                        `Naturally confident and keen to take the lead`,
                        `Enjoys being around people and feeling noticed`,
                        `Brings energy and creativity into group activities`,
                        `May become restless if there’s too much waiting or not enough fun`,
                        `Can be impulsive or overlook details when rushing ahead`
                    ],
                    bottomHeadings: [
                        `These children do best when they have room to express themselves, take on responsibility, and stay active. They may need help slowing down, listening to others, and staying focused on tasks that take longer to complete.`,
                        `With the right support, `+this.childName+` can grow into someone who inspires and energises others - not just with ideas and excitement, but with growing patience, purpose, and follow-through.`

                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an Influential (I) style are natural communicators. They enjoy being around people, sharing stories, and expressing their thoughts. Whether it’s chatting with friends, performing in front of others, or coming up with new ideas, they often bring energy and excitement to whatever they do.`,
                        `These children are enthusiastic and imaginative. They are often drawn to fun, colour, and creativity, and they enjoy being liked and noticed. They tend to be optimistic, and their positive attitude can be uplifting for those around them.`
                    ],
                    commonTraits: [
                        `Enjoys talking and connecting with others`,
                        `Often has lots of ideas and things to share`,
                        `Likes to be the centre of attention`,
                        `Has a big imagination and strong sense of creativity`,
                        `Can be impulsive or easily distracted`,
                        `Wants to feel liked, included, and appreciated`
                    ],
                    bottomHeadings: [
                        `Influential children like things to feel light and engaging. They may struggle with tasks that feel repetitive or too serious. Sometimes, they focus more on people than on details, or they might talk instead of listen. This isn’t because they aren’t trying - they simply respond best to environments where expression and connection are part of the process.`,
                        `With support, `+this.childName+` can use this natural energy to inspire others, build strong relationships, and grow in confidence.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a DI style are confident, fast-moving, and full of energy. They enjoy being around people and often take the lead in group situations. These children like to get things done quickly, but also want the process to feel fun and exciting. They are natural decision-makers who can think on their feet and bring enthusiasm into nearly everything they do.`,
                        `They are usually talkative, expressive, and assertive. They may try to take charge during games, offer bold ideas during class projects, or be the first to volunteer for something new. Their enthusiasm can be contagious, but their high energy and strong opinions may sometimes feel overwhelming to others.`
                    ],
                    commonTraits: [
                        `Quick to speak and act`,
                        `Comfortable leading or taking initiative`,
                        `Enjoys being noticed, praised, or included`,
                        `Motivated by fast progress and exciting challenges`,
                        `May lose interest if things feel too slow or repetitive`,
                        `Can be impatient, especially when others are uncertain or hesitant`
                    ],
                    bottomHeadings: [
                        `These children do best in environments that allow for both action and interaction. They thrive when they feel empowered and engaged, but they may need help learning when to pause, listen, and include others.`,
                        `With support and gentle guidance, `+this.childName+` can grow into a lively, inspiring individual who not only leads with confidence, but also listens with care and follows through with focus.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a DC style are often serious, determined, and highly focused. They like to feel in control of what they’re doing and are motivated by results, logic, and clear expectations. These children usually enjoy challenges - especially when they have the tools to succeed. They are more likely to think things through before acting, but when they’re ready, they move with purpose.`,
                        `They may come across as confident and direct, but also careful and precise. They often want to be right, and they tend to ask thoughtful or technical questions before starting something new. If something feels unfair or doesn’t make sense, they may challenge it directly or step back until it’s clear.`
                    ],
                    commonTraits: [
                        `Setting high standards for themselves and others`,
                        `Wanting to know the rules, but also test them`,
                        `Preferring clarity and control over group chatter or messiness`,
                        `Feeling frustrated by slow or disorganised tasks`,
                        `Enjoying independence more than collaboration`,
                        `Being confident in their thinking, but less comfortable with uncertainty`
                    ],
                    bottomHeadings: [
                        `These children do best when they feel respected, trusted, and have space to work things out logically. They may not ask for help or attention, but they care deeply about doing things well and being taken seriously.`,
                        `With steady support and space to think, `+this.childName+` can grow into a capable, independent thinker who brings both focus and depth to whatever they choose to do.`
                    ],
                },
                C: {
                    topHeadings: [

                    ],
                    commonTraits: [

                    ],
                    bottomHeadings: [

                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    commonTraits: [

                    ],
                    bottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    commonTraits: [

                    ],
                    bottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    commonTraits: [

                    ],
                    bottomHeadings: [

                    ],
                },
            }
        };

    },
    computed: {
        commonTraitsLength () {
            return this.reportData[this.discStyle]?.commonTraits.length;
        }
    },


};
</script>
