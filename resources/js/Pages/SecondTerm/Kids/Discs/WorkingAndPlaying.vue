<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Working and Playing With Others</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-5">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/75.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-7">
                <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>

        </div>
        <div class="row p-6">
            <div class="col-12">
                <div class="flex justify-center items-center">
                    <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/76.svg'"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    You might notice:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul v-for="noticePoint in reportData[discStyle]?.noticePoints" class="col-12 list-disc">
                        <li>
                            <p class="font-bold ml-2 my-2">
                                {{ noticePoint }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/77.svg'"
                        alt="" />
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6 flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/78.svg'"
                        alt="" />
                </div>
                <div class="col-6">
                    <p class="px-2" v-html="reportData[discStyle]?.middleHeading">
                    </p>
                </div>
            </div>
            <div class="col-12">
                <h4 class="mb-4 font-bold text-red-400">
                    To support this:
                </h4>
            </div>
            <div class="row g-4">
                <div v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints" :key="index"
                    class="col-md-4">
                    <div class="box-img d-flex align-items-center justify-content-center text-center p-4"
                        :style="{ backgroundImage: `url(${getSupportImagePath(index)})` }">
                        <span>{{ supportPoint }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="relative w-full h-[400px] flex justify-center text-white board-image font-bold items-center">
            <div class="text-black px-4 py-2 p-20 rounded">
                <p class="mb-4 p-20" v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings" >
                    {{ bottomHeading }}
                </p>

            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'HowTheyTackle',
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
                        `Children with an SI style are naturally caring, gentle, and people-focused. They enjoy working and playing in groups - especially when the group feels calm, kind, and familiar. They're more likely to include others, follow the rules, and avoid conflict, often helping keep the group atmosphere warm and steady.`,
                        `They may avoid speaking up if someone is being unfair or unkind, not because they don't notice, but because they don't want to upset anyone. They're more likely to go along with the group than push for their own ideas, especially in new or fast-moving settings.`,
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Taking care to include others and keep things fair`,
                        `Supporting teammates or classmates quietly and helpfully`,
                        `Avoiding group conflict or loud disagreements`,
                        `Preferring group roles that are cooperative rather than competitive`,
                        `Holding back their own ideas to keep others happy`
                    ],
                    middleHeading: `These children thrive when their kindness is recognised and when they feel safe to contribute without pressure. They benefit from gentle guidance that helps them share their ideas, speak up when needed, and trust their value in the group. `,
                    supportPoints: [
                        `Create chances to lead in quiet, low-pressure ways`,
                        `Reflect on group time: "What worked well?" or "Did anything feel tricky?"`,
                        `Encourage them to speak up when something doesn't feel fair`,
                        `Praise kindness, but also confidence when they express themselves`,
                        `Remind them that being honest and kind can happen at the same time`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With support,` + this.childName + `can grow into someone who brings harmony and care into every group - while also learning to stand up, speak out, and contribute with gentle strength.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are often gentle, dependable, and respectful in group settings. They prefer calm, structured play and usually enjoy being with a small, familiar group rather than large or noisy ones. They don’t often push for attention and may quietly help things run smoothly without needing to be in charge.`,
                        `They are less likely to speak up when something feels unfair or chaotic, and they may step back if the environment becomes too loud or unpredictable. While they are thoughtful and cooperative, they can be overlooked if more vocal children dominate the group.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Playing well with others when the group is calm and inclusive`,
                        `Being quietly helpful and kind to their peers`,
                        `Struggling to speak up if they’re treated unfairly`,
                        `Avoiding fast-paced or competitive games`,
                        `Feeling most comfortable with familiar friends or routines`
                    ],
                    middleHeading: `These children benefit from group settings where everyone is given space to contribute and where clear rules are in place. Encouraging them to share their ideas and take gentle leadership roles helps build confidence in social situations. `,
                    supportPoints: [
                        `Assign rotating responsibilities in group tasks so everyone has a turn`,
                        `Encourage them to express how they feel in a group: “Was that game fair for you?”`,
                        `Praise acts of kindness and quiet teamwork`,
                        `Let them practice speaking up in smaller groups before joining larger ones`,
                        `Remind them that their voice matters, even if others are louder`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With encouragement, `+ this.childName+` can become a reliable and thoughtful team member - someone who contributes calmly and brings a steady, respectful presence to any group.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style are often kind and dependable teammates. They usually enjoy being part of a group, especially when things feel calm and friendly. They may not want to take the lead, but they often make the group stronger by helping others and keeping the peace.`,
                        `These children may avoid conflict, even if something is unfair. They might go along with others to keep things running smoothly, rather than speaking up. While this helps them get along with lots of people, they may need support in setting boundaries or sharing their own ideas.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Choosing quiet or kind friends`,
                        `Avoiding arguments or stepping back from loud groups`,
                        `Being happy to help but hesitant to lead`,
                        `Saying yes even when they’re unsure`,
                        `Keeping feelings to themselves to avoid conflict`
                    ],
                    middleHeading: `These children are often thoughtful and considerate, but they may struggle when group dynamics become tense or competitive. Helping `+this.childName+` feel confident in their role and voice is an important part of their social development.`,
                    supportPoints: [
                        `Talk about how everyone’s role matters in a team`,
                        `Encourage them to speak up if something feels unfair or uncomfortable`,
                        `Praise quiet leadership, like kindness, fairness, and helping behind the scenes`,
                        `Use role-play to practice standing up for themselves in a gentle way`,
                        `Check in after group activities and ask, “How did that feel for you?”`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With encouragement, `+this.childName+` can become someone others look up to for being steady, respectful, and fair. They may not always be loud, but their presence can have a strong and positive influence on any group.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style are naturally friendly and thoughtful in group settings. They enjoy being part of a team, helping others, and creating a positive, inclusive atmosphere. They may not push to lead, but they often play an important role in keeping everyone connected and at ease. They’re more likely to encourage than to compete - and they usually want everyone to get along.`,
                        `At times, they may go along with what others want even if they disagree. They may avoid speaking up in group decisions or become upset if there’s tension or unfairness. While they enjoy collaboration, they benefit from learning how to set gentle boundaries and share their own ideas more confidently.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Supporting others and offering help during group activities`,
                        `Avoiding conflict or stepping back when the group is loud or competitive`,
                        `Feeling happiest when the group is calm and inclusive`,
                        `Being hesitant to lead, even when they have a good idea`,
                        `Needing encouragement to assert themselves or speak up`,
                    ],
                    middleHeading: `These children thrive in group settings where kindness, encouragement, and cooperation are valued. They benefit from guidance in building quiet confidence and sharing their voice - even when the atmosphere is busy or fast-moving.`,
                    supportPoints: [
                        `Praise their kindness and teamwork, not just their results`,
                        `Encourage them to express their opinions, even in small ways`,
                        `Offer chances to lead a group in a gentle or supportive role`,
                        `Reflect together: “What made the group work well today?”`,
                        `Talk about how everyone’s voice adds value - including theirs`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With the right support, `+this.childName+` can become someone who brings warmth and harmony to group settings - and who learns to lead in their own calm, thoughtful way.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> are usually sociable, lively, and quick to take the lead in group settings. They enjoy being around others, often bringing energy and humour into the room. They tend to be natural leaders in games and group activities, with a strong desire to be liked and listened to.`,
                        `They may prefer to steer the group rather than follow someone else’s plan. If others don’t agree with their ideas or slow down the activity, they might become impatient or lose interest. They often thrive when they feel both included and in control.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Taking the lead during group play or projects`,
                        `Speaking up quickly in team discussions`,
                        `Making friends easily, but sometimes trying to be “in charge”`,
                        `Getting frustrated when others don’t follow their ideas`,
                        `Enjoying attention and praise in group settings`,
                    ],
                    middleHeading: `These children benefit from learning how to balance their strong voice with space for others. They don’t need to stop leading - but learning to share, listen, and compromise helps them grow into more inclusive team players.`,
                    supportPoints: [
                        `Practice taking turns or sharing leadership roles during play`,
                        `Praise them when they include or encourage others`,
                        `Ask how the group worked together, not just what they did`,
                        `Remind them that other people’s ideas matter too`,
                        `Encourage quiet moments or one-on-one play to build empathy`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With support, `+this.childName+` can grow into someone who not only leads with confidence, but also listens with care - making them a teammate that others trust and enjoy being around.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> are naturally social. `+this.childName+` is likely to enjoy being around others, joining in games, and making new friends. They often bring energy and excitement to group activities, and they like to feel included and liked by those around them.`,
                        `These children usually prefer teamwork to working alone, and they often communicate their ideas with lots of expression. At times, `+this.childName+` may talk over others without meaning to or become distracted by conversations. They may also try to be the centre of attention, especially in larger groups.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Joining in easily with others`,
                        `Talking a lot during group tasks`,
                        `Finding it hard to take turns or stay quiet`,
                        `Being drawn to popular or outgoing peers`,
                        `Wanting approval or laughter from the group`,
                    ],
                    middleHeading: `These children are often seen as fun to be around, but they may need help slowing down and paying attention to how others feel. Reminders about listening, waiting, and sharing the spotlight can help them build stronger, more balanced relationships.`,
                    supportPoints: [
                        `Talk about what good teamwork looks like, including taking turns and listening`,
                        `Praise moments when they include others or let someone else lead`,
                        `Use gentle prompts like, “Let’s hear what your friend thinks too”`,
                        `Help them notice when someone else might feel left out or quiet`,
                        `Reflect with them after group activities, asking, “What went well?” or “What could you do differently next time?”`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With support, `+this.childName+` can learn to be both expressive and thoughtful. Over time, they’ll grow into someone who lifts up the whole group - not just through fun and energy, but through kindness and awareness too.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> are often natural leaders in group settings. They enjoy being around others, sharing ideas, and taking charge during games or projects. They are confident and sociable, and they tend to bring energy and enthusiasm into group activities. Others may look to them for direction, or simply be drawn to their outgoing nature.`,
                        `While they usually enjoy being the centre of attention, they may struggle when asked to follow someone else’s lead or when things aren’t going their way. They may interrupt, take over, or become frustrated if others move too slowly or don’t agree with their plan.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Enjoying group play and leading team activities`,
                        `Wanting to be heard and recognised in group settings`,
                        `Interrupting or talking over others when excited`,
                        `Becoming frustrated if others disagree or go off track`,
                        `Needing reminders to listen and include everyone fairly`,
                    ],
                    middleHeading: `These children benefit from learning how to balance their natural confidence with patience and teamwork. They don’t need to quiet their personality - just learn when to pause, share space, and work with others rather than leading every time.`,
                    supportPoints: [
                        `Talk about what makes a good team member, not just a good leader`,
                        `Praise them for including others, not just for taking charge`,
                        `Practice taking turns or playing different roles in group games`,
                        `Ask, “How did the group work together?” after activities`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With guidance, `+this.childName+` can become not just a bold leader, but a fair and thoughtful one - someone others want to follow because they lead with both confidence and care.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> are often independent and task-focused in group settings. They may prefer to lead or work alone rather than take part in unstructured or overly social activities. They usually care more about getting the job done properly than making sure everyone feels included - not because they don’t care, but because they’re focused on results and doing things the “right” way.`,
                        `They may become frustrated when others are slow, disorganised, or off-task. In games or group work, they might try to take over or withdraw entirely if they feel others aren’t meeting their standards.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Preferring to lead or work independently`,
                        `Being critical if others aren’t following the rules`,
                        `Struggling with compromise or group decision-making`,
                        `Avoiding overly chatty or playful groups`,
                        `Wanting things done their way and finding it hard to adapt`,
                    ],
                    middleHeading: `These children benefit from learning how to be more flexible, patient, and collaborative. They don’t need to be the most social person in the group - but learning to listen, share space, and respect different styles helps them succeed in team settings.`,
                    supportPoints: [
                        `Give them clear roles in group work so they know what to focus on`,
                        `Practice turn-taking and compromise in small group games`,
                        `Talk about how different strengths can help a group succeed`,
                        `Praise them when they show patience or flexibility with others`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With support, `+this.childName+` can learn to bring their precision and drive into group settings - becoming someone who contributes with both purpose and respect.`
                    ],
                },
                C: {
                    topHeadings: [
                        `Children with a <b>Cautious style</b> are often more comfortable in smaller groups or one-on-one settings. They may take time to warm up to new people or situations, but once they feel settled, they can be kind, thoughtful companions. They tend to avoid conflict and prefer peaceful, structured play where everyone understands the rules.`,
                        `These children may step back when others are being loud or unpredictable. They might find it hard to speak up if someone is being unkind or breaking the rules, especially if they’re not sure how to respond.`
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Playing quietly or sticking to familiar friends`,
                        `Watching before joining in with a new group`,
                        `Wanting everyone to follow the same rules or routines`,
                        `Avoiding loud or chaotic games`,
                        `Struggling to speak up when something feels wrong`,
                    ],
                    middleHeading: `These children are usually well liked by their peers, especially in calm or structured settings. However, they may need support in being more assertive, flexible, and confident in social situations that feel uncertain.`,
                    supportPoints: [
                        `Practice social situations through role-play or gentle discussion`,
                        `Encourage them to speak up by saying things like, “It’s okay to let others know how you feel”`,
                        `Praise moments when they show kindness, fairness, or clear communication`,
                        `Help them understand that not everyone follows rules the same way - and that it’s okay to adapt`,
                        `Reflect on group experiences afterwards by asking, “What went well?” or “What could you try next time?”`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With support, `+this.childName+` can become a steady, respectful member of any group. Over time, they’ll grow into someone who brings fairness, structure, and quiet confidence into the way they work and play with others.`
                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [

                    ],
                },
            }
        };

    },
    methods: {
        getSupportImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.supportPointImages[index];
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
    background-image: url("/images/second-term/kids-disc-images/80.svg");
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