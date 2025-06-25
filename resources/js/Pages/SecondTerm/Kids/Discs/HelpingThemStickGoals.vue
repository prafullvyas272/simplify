<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Helping Them Set and Stick to Goals</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-4">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/71.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-8">
                <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
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
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/72.svg'"
                        alt="" />
                </div>
            </div>
            <div class="row p-6">
                <div class="col-12 flex items-center">
                    <p class="px-2">
                        {{ reportData[discStyle]?.middleHeading }}
                    </p>
                </div>
            </div>
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    How to support {{ childName }}:
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
        <div class="row p-6">
            <div class="col-4">
                <div class="flex">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/74.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-8">
                <div v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings" :key="index" class="">
                    <p class="my-4 font-bold">
                        <span v-html="bottomHeading"></span>
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
                        `Children with an SI style are usually happy to work towards a goal - especially when it feels manageable, familiar, and supported by the people around them. They're often more focused on doing something kind or cooperative than aiming to "win" or be the best. Their goals may be quiet and personal rather than bold or competitive.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Enjoying small goals tied to helping others or building connection`,
                        `Staying committed when the environment is steady and kind`,
                        `Drifting if a task feels uncertain or lacks encouragement`,
                        `Preferring to reach goals alongside others rather than alone`,
                        `Hesitating to set goals that feel too ambitious or unfamiliar`,
                    ],
                    middleHeading: `They benefit from goals that are broken into steps, supported by praise, and grounded in emotional security. They may not ask for attention, but they often appreciate being noticed and encouraged throughout the process. `,
                    supportPoints: [
                        `Use gentle goal-setting conversations: "What's something you'd like to try this week?"`,
                        `Break larger goals into smaller, trackable steps`,
                        `Reflect often: "What part felt easiest?" or "What helped you keep going?"`,
                        `Encourage with kindness: "You didn't give up - that matters."`,
                        `Help them set goals that feel both personal and achievable`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `They may lose momentum if they don't feel encouraged or if the task becomes confusing or emotionally unsettled. They can also struggle to stay focused on longer-term goals without regular check-ins or gentle reminders.`,
                        `Over time, with support and structure, ` + this.childName + ` can learn that reaching a goal isn't about speed or being the loudest - it's about taking one steady, confident step at a time.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are naturally steady and committed when they feel secure in what they’re doing. They often prefer smaller, manageable goals that follow a clear process. They are less likely to set bold or ambitious targets on their own, but they tend to stick with tasks quietly and patiently - especially when they know what’s expected.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Setting gentle, realistic goals with clear steps`,
                        `Wanting support before starting something new`,
                        `Needing more time to feel confident in their ability`,
                        `Becoming stuck if unsure about how to begin`,
                        `Working best with encouragement and clear milestones`,
                    ],
                    middleHeading: `These children benefit from clear plans and quiet check-ins. Encouraging progress over perfection - and helping them reflect on what’s going well - can make a big difference in how they approach longer tasks. `,
                    supportPoints: [
                        `Set small, achievable goals with a clear path`,
                        `Use visual aids or charts to show progress`,
                        `Ask, “What’s one step you can take today?”`,
                        `Celebrate effort and improvement, not just final results`,
                        `Reflect often with prompts like, “What helped you keep going?” or “What would you try next time?”`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `They may be reluctant to set goals that feel too unfamiliar or risky, and they can lose momentum if they aren’t sure how to begin. They may also spend too long perfecting something rather than progressing through it.`,
                        `With support, `+ this.childName +` can build strong habits around goal-setting - learning that progress is about showing up and growing steadily, not racing to the finish.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style may not always set bold goals, but they are often committed once they feel secure and clear about what needs to be done. They are more likely to focus on tasks that support others or help keep things running smoothly. While they may not rush ahead with excitement, they are usually reliable once they begin.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Waiting for someone else to suggest a goal`,
                        `Wanting to know what’s expected before starting`,
                        `Sticking with something once it feels familiar`,
                        `Avoiding goals that feel too big or uncertain`,
                        `Wanting reassurance that they’re doing it right`,
                    ],
                    middleHeading: `These children often prefer smaller, realistic goals and steady progress. They may need encouragement to believe that they can aim higher or try something outside their comfort zone. The key is to help them set goals that feel manageable but still offer a sense of growth. `,
                    supportPoints: [
                        `Break bigger goals into clear, gentle steps`,
                        `Use visual trackers or checklists to show progress`,
                        `Ask questions like “What would you like to get better at this week?”`,
                        `Encourage them to try small new things, even if they feel unsure`,
                        `Celebrate consistency, not just achievement`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `Letting them choose some of their own goals also builds ownership. For example, ask, “Is there something new you’d like to work on?” or “What made you feel proud this week?”`,
                        `With the right support, `+this.childName+` can learn how to stick with a goal from beginning to end. Their steady, thoughtful nature means they’re often more consistent than they realise - and this can grow into a quiet, lasting confidence.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style are usually happy to work towards goals - especially when the goals feel encouraging, manageable, and supported by others. They tend to be more focused on contributing and being part of something than on winning or standing out. While they may not be the first to set bold targets, they enjoy feeling proud of their progress when the path feels clear and positive.`,
                        `They may need help setting goals independently, staying motivated without constant reassurance, or pushing through moments of uncertainty. They sometimes put others’ needs ahead of their own, which can get in the way of finishing what they’ve started.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Setting gentle, realistic goals rather than big challenges`,
                        `Sticking with a task when others are depending on them`,
                        `Avoiding goals that feel too competitive or pressured`,
                        `Drifting off if progress is slow or unclear`,
                        `Responding well to check-ins and encouragement`,
                    ],
                    middleHeading: `These children do best when goals are broken into achievable steps and paired with regular support. Gentle praise and a sense of teamwork often help them stay focused and proud of what they’ve done. `,
                    supportPoints: [
                        `Set small, positive goals with short-term checkpoints`,
                        `Use visuals like stickers, charts, or a daily tracker`,
                        `Ask, “What do you want to feel proud of this week?”`,
                        `Celebrate effort and care, not just completion`,
                        `Reflect together with questions like, “What made this easier?” or “What would you change next time?”`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `When they feel supported, `+this.childName+` is more likely to stay committed and grow in confidence. Over time, they’ll learn to set goals not just to please others - but because they believe in what they’re doing.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> are naturally goal-driven - especially when the goal is exciting, visible, or lets them take the lead. They like to achieve things quickly and enjoy being recognised when they do. They’re more likely to set bold, creative goals than quiet, step-by-step ones. Starting comes easily - sticking with it may take more support.`,
                        `They may lose interest if progress feels slow or if the task becomes routine. They’re often motivated by rewards, praise, or the idea of making an impact, but they may need reminders to stay consistent and finish what they start.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Setting big or exciting goals without much planning`,
                        `Feeling confident at the start, but drifting later`,
                        `Needing quick wins to stay motivated`,
                        `Becoming frustrated if something feels too slow`,
                        `Enjoying public recognition or praise for effort`,
                    ],
                    middleHeading: ` Helping them break larger goals into shorter steps can make the process feel more manageable and rewarding. They may also benefit from encouragement that focuses on effort, not just the final result.`,
                    supportPoints: [
                        `Break bigger goals into small, playful steps`,
                        `Use fun checklists, stickers, or visual trackers`,
                        `Ask, “What’s the next small thing you could do?”`,
                        `Keep goals light and enjoyable when possible`,
                        `Celebrate effort, not just achievement`,
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `Letting them reflect on what they’ve achieved - and what helped them do it - builds self-awareness and motivation. Questions like, “What are you proud of?” or “What’s next?” help keep them focused in a way that still feels fun and fast-paced.`,
                        `With the right guidance, `+this.childName+` can turn bold ideas into real progress - learning to follow through without losing their energy or sense of fun.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> often enjoy setting exciting goals and starting new things with enthusiasm. `+this.childName+` is likely to be motivated by the idea of what could happen and how fun it will be to get there. They may come up with colourful ideas or big plans, but they might need help staying on track when the excitement fades or when something gets in the way.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Starting tasks with energy but losing interest partway through`,
                        `Getting distracted by something new or more fun`,
                        `Forgetting about a goal unless reminded often`,
                        `Needing praise and encouragement to stay focused`,
                        `Wanting quick results or visible progress`,
                    ],
                    middleHeading: `These children are usually full of ideas, but they may not always break those ideas down into steps. `+this.childName+` may also avoid goals that feel too hard, slow, or not engaging. The challenge is helping them learn how to follow through, even when things get less interesting.`,
                    supportPoints: [
                        `Break bigger goals into small, playful steps`,
                        `Use fun checklists, stickers, or visual trackers`,
                        `Ask, “What’s the next small thing you could do?”`,
                        `Keep goals light and enjoyable when possible`,
                        `Celebrate effort, not just achievement`,
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `Letting them choose some of their own goals also builds ownership. For example, ask, “What would you like to get better at this week?” or “Is there something new you want to try?”`,
                        `With the right support, `+this.childName+` can learn how to stay committed even when things get tough. This turns their natural enthusiasm into a skill that helps them achieve goals with confidence and consistency.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> are often goal-driven - especially when the goal feels exciting, competitive, or visible to others. They enjoy working towards something with energy and speed, and they usually start strong. But if the task feels slow, repetitive, or takes too long to show results, they may lose interest or move on to something else.`,
                        `They like to set their own targets, often aiming high and thinking big. While this ambition is a strength, they may need support in learning how to follow through - even when the initial excitement fades.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Setting bold goals or wanting to lead a challenge`,
                        `Starting quickly, but struggling with follow-through`,
                        `Choosing fast results over slower, steady progress`,
                        `Focusing more on the big picture than on small steps`,
                        `Becoming discouraged if progress isn’t immediate`,
                    ],
                    middleHeading: `These children often need help breaking goals into realistic, manageable parts. They may also benefit from praise that focuses on effort and consistency, not just the end result.`,
                    supportPoints: [
                        `Break goals into short-term steps they can check off`,
                        `Use visual trackers or progress charts to show how far they’ve come`,
                        `Ask questions like “What do you want to work on this week?”`,
                        `Celebrate small wins and effort along the way`,
                        `Help them reflect on what they learned - not just whether they won`,
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `Letting them take ownership of their goals helps build lasting motivation. For example, ask, “What made you feel proud today?” or “What do you want to aim for next?”`,
                        `With support, `+this.childName+` can learn that sticking to a goal is just as rewarding as setting one. Over time, this helps turn bold ideas into real progress - and real confidence.`
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
