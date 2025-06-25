<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Supporting Them in the Classroom
            </h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
            <template v-if="(index % 2 == 0)">
                <div class="col-6">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="getTopHeadingImagePath(index)" alt="" />
                    </div>
                </div>
            </template>
            <template v-if="(index % 2 != 0)">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="getTopHeadingImagePath(index)" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </template>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    What teachers might notice:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul v-for="teacherMightNotice in reportData[discStyle]?.teacherMightNotices"
                        class="col-12 list-disc">
                        <li>
                            <p class="font-bold ml-2 my-2">
                                {{ teacherMightNotice }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/89.svg'"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div
                class="relative w-full h-[400px] flex justify-center items-center text-white board-image font-bold px-5 pt-5">
                <div class="text-black px-4 py-2 rounded text-center">
                    <p class="mb-4">
                        {{ reportData[discStyle]?.boardImageText }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Ways teachers and parents can work together to support {{ childName }}:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul v-for="teacherParentSupportPoint in reportData[discStyle]?.teacherParentSupportPoints"
                        class="col-12 list-disc">
                        <li>
                            <p class="font-bold ml-2 my-2">
                                {{ teacherParentSupportPoint }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/91.svg'"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div
                class="relative w-full h-[400px] flex justify-center items-center text-white board-image-2 font-bold px-5 pt-5">
                <div class="text-black px-20 py-2 rounded text-center">
                    <div class="px-20">
                        <p class="mb-4 px-20" v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings"
                        :key="index">
                        {{ bottomHeading }}
                    </p>
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
    name: 'SupportingThem',
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
                        `In school, children with an SI style are often kind, steady, and well-liked by their peers. They tend to follow routines, help others, and keep the atmosphere calm and friendly. They are more likely to work quietly and cooperatively than to compete or push for attention. Teachers often describe them as reliable and warm, especially when they feel emotionally secure in the classroom.`,
                        this.childName +  ` might be the child who checks on a friend, gently encourages others, or keeps group activities running smoothly. However, they may avoid speaking up when they're unsure, and they might hold back ideas if the group is loud or the task feels unfamiliar.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `Gentle participation and kind behaviour in class`,
                        `A preference for familiar tasks and steady routines`,
                        `Avoiding conflict or fast-paced, competitive settings`,
                        `Needing encouragement to take initiative`,
                        `Offering quiet support to others without drawing attention to themselves`,
                    ],
                    boardImageText: `These children benefit from a stable classroom environment where their strengths are noticed and their confidence is gently built. They may not ask for support, but regular encouragement helps them grow both socially and academically.`,
                    teacherParentSupportPoints: [
                        `Give roles that encourage quiet leadership (e.g. class monitor, group organiser)`,
                        `Provide consistent praise for effort, kindness, and quiet contribution`,
                        `Invite them to share ideas in smaller groups or one-on-one settings`,
                        `Offer structured opportunities to try new things with support`,
                        `Keep communication open about how they're feeling and engaging`,
                    ],
                    bottomHeadings: [
                        `When supported well, SI-style children often become the dependable glue of the classroom - encouraging others, contributing steadily, and helping to build a culture of respect and kindness.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `In school, children with an SC style are often quiet, respectful, and reliable. They usually enjoy structured lessons, clear expectations, and a calm learning environment. They may not draw attention to themselves, but they’re likely to follow the rules and complete their work carefully and thoroughly.`,
                        this.childName + ` might not be the first to raise their hand, but they’re often paying close attention and trying hard to do things the right way. If the classroom becomes noisy, unpredictable, or emotionally tense, they may withdraw or lose focus. They may also hesitate to ask for help, even if they’re unsure.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `A preference for quiet, steady work over loud or fast-paced tasks`,
                        `Needing extra time to warm up to new activities or people`,
                        `Avoiding situations where they might be wrong or embarrassed`,
                        `Responding best to calm, structured routines`,
                        `Being thoughtful and consistent, but not always confident`,
                    ],
                    boardImageText: `These children thrive in classrooms where clear expectations are paired with calm encouragement. They benefit from having time to prepare, safe ways to contribute, and a sense that their effort is seen and appreciated.`,
                    teacherParentSupportPoints: [
                        `Give advance notice about changes in schedule or expectations`,
                        `Use structured group work with defined roles`,
                        `Offer praise privately or in one-on-one settings`,
                        `Encourage participation in smaller groups or pairs before whole-class tasks`,
                        `Keep communication open about how they’re coping with class routines and tasks`
                    ],
                    bottomHeadings: [
                        `When supported with kindness and clarity, SC-style children often become quietly confident learners - focused, dependable, and able to bring care and consistency to everything they do.`
                    ],
                },
                S: {
                    topHeadings: [
                        `In school, children with a Supportive style are often seen as kind, calm, and reliable. They enjoy routines and like to know what is expected. They are usually happy to follow the rules, help out quietly, and avoid drawing attention to themselves. These traits help them feel settled and allow others to feel comfortable around them too.`,
                        this.childName + ` might be the child who sits in the same spot each day, follows the class rules without fuss, and helps a friend without being asked. They may not raise their hand often or speak up in large groups, but they are often fully engaged in quieter ways.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `Willingness to follow routines and expectations`,
                        `Gentle or quiet nature, especially in group settings`,
                        `Strong sense of responsibility once they feel settled`,
                        `Reluctance to try new things or take risks without reassurance`,
                        `Difficulty speaking up or asking for help in busy classrooms`,
                    ],
                    boardImageText: `To support this style in the classroom, calm environments and consistent expectations work best. These children benefit from encouragement that builds confidence and routines that give them a sense of security.`,
                    teacherParentSupportPoints: [
                        `Create quiet moments for them to share thoughts, such as small group check-ins or pair discussions`,
                        `Let them help with class routines or responsibilities to build quiet leadership`,
                        `Offer praise for effort, not just participation or boldness`,
                        `Encourage them to try something new in a low-pressure way`,
                        `Make sure they know it’s okay to ask for help or say what they need`,
                        `Keep home–school communication open so that subtle patterns aren’t missed`
                    ],
                    bottomHeadings: [
                        `When supported well, S-style children often become dependable learners and loyal friends. With gentle guidance, `+this.childName+` can build confidence in their own pace and style, bringing calm strength and kindness into the classroom.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `In school, children with an IS style are often kind, sociable, and well-liked by classmates. They’re usually the ones who help others, include people in group activities, and maintain a peaceful atmosphere. They may not be the loudest voice in the room, but they’re often emotionally aware and eager to please both teachers and peers.`,
                        this.childName+` might be the child who offers to help, checks in on a friend, or quietly follows instructions with care. They are more likely to thrive in a warm, encouraging environment where expectations are clear, and they feel emotionally safe. When something feels tense or rushed, they may retreat or become unsure.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `Thoughtful and supportive interactions with others`,
                        `A preference for group work that feels calm and inclusive`,
                        `Avoidance of conflict or public correction`,
                        `Hesitance to speak up in louder or more competitive settings`,
                        `A strong desire for reassurance or praise`,
                    ],
                    boardImageText: `These children benefit from consistent encouragement and clear, kind guidance. They may need reminders that their voice matters and that it’s okay to share their ideas, even when they’re different from the group.`,
                    teacherParentSupportPoints: [
                        `Offer low-pressure opportunities to share thoughts or lead activities`,
                        `Use positive reinforcement for participation and quiet effort`,
                        `Create structured group work where roles are shared fairly`,
                        `Encourage emotional reflection: “How did that activity feel?”`,
                        `Keep home–school communication open to support confidence and classroom participation`
                    ],
                    bottomHeadings: [
                        `When supported well, IS-style children often become valued contributors in class - balancing empathy with quiet leadership and showing that kindness is a strength in any learning environment.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `In school, children with an <b>ID style</b> are often expressive, confident, and eager to take part. They may be among the first to speak up, volunteer, or suggest ideas. They tend to enjoy attention and are usually motivated by interaction, praise, and leadership opportunities. They’re most engaged when lessons feel active, creative, or social.`,
                        this.childName+` might be the child who leads a group project, chats easily with classmates, or comes up with big ideas during discussions. They may struggle, however, with more structured or repetitive tasks - especially those that require long periods of quiet concentration.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `High participation and enthusiasm during interactive lessons`,
                        `A strong desire to lead or influence group activities`,
                        `Difficulty staying focused in quiet or independent work`,
                        `Restlessness or distraction if the pace feels slow`,
                        `Confidence in speaking, but less patience for listening`,
                    ],
                    boardImageText: `These children benefit from a classroom that allows for movement, creativity, and expression - balanced with gentle support in managing structure, listening, and follow-through.`,
                    teacherParentSupportPoints: [
                        `Break tasks into smaller steps with checkpoints for feedback`,
                        `Give opportunities to lead, present, or share ideas`,
                        `Use timers or visual tools to support focus and transitions`,
                        `Encourage peer work that includes listening and taking turns`,
                        `Praise consistency and teamwork as much as creativity`,
                        `Keep home–school communication open to share progress and encourage reflection`
                    ],
                    bottomHeadings: [
                        `When supported well, ID-style children can bring real energy to the classroom. With time and encouragement, `+this.childName+` can become a student who not only shines with ideas - but also learns to pace themselves and work effectively with others.`
                    ],
                },
                I: {
                    topHeadings: [
                        `In school, children with an <b>Influential style</b> are often seen as cheerful, talkative, and full of energy. They thrive on connection and excitement, and enjoy learning through social interaction. These traits can make them a delight in class, but may also lead to challenges when tasks require quiet focus, routine, or sustained attention.`,
                        this.childName+` might be the child who wants to share ideas aloud, tells stories during quiet time, or struggles to sit still for long periods. They often seek approval from teachers and friends and may lose interest if they don’t feel engaged or appreciated.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `Excitement when interacting with others`,
                        `Eagerness to answer questions or join discussions`,
                        `Difficulty staying focused on repetitive or solo tasks`,
                        `Tendency to talk during quiet work times`,
                        `Strong emotional reactions to feedback, both positive and negative`,
                    ],
                    boardImageText: `To support this style in the classroom, warmth and structure work well together. These children benefit from encouragement, connection, and a bit of fun - all within clear expectations and routines.`,
                    teacherParentSupportPoints: [
                        `Provide roles that involve talking, such as sharing news or helping lead morning routines`,
                        `Break longer tasks into short, engaging parts with movement or variety`,
                        `Use visual reminders and gentle redirection when attention drifts`,
                        `Praise their contributions to group harmony and team efforts`,
                        `Build in time for creative expression and storytelling`,
                        `Keep home–school communication open to celebrate progress and spot emerging patterns`
                    ],
                    bottomHeadings: [
                        `When supported well, I-style children often become expressive, joyful learners who bring energy and positivity into the classroom. With thoughtful guidance, `+this.childName+` can learn to balance their sociable spirit with focus and responsibility, creating a strong foundation for academic and personal growth.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `In school, children with a <b>DI style</b> are often seen as energetic, vocal, and enthusiastic. They enjoy taking part, leading discussions, and jumping into new activities. They may raise their hand first, offer strong opinions, or try to take charge during group work. Their confidence can be a real strength - but it may need gentle guidance to help them stay focused, patient, and inclusive.`,
                        this.childName+` might be the child who thrives when they feel noticed, trusted, and given some responsibility. They may lose interest when lessons feel repetitive or too slow, or when they don’t get a chance to move or speak. They’re often most engaged in lessons that feel fast-paced, collaborative, or open-ended.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `Speaking confidently and participating often`,
                        `Wanting to lead tasks or contribute ideas first`,
                        `Struggling with quiet, repetitive, or highly structured work`,
                        `Becoming frustrated if they feel ignored or limited`,
                        `Needing reminders to listen and share the space with others`,
                    ],
                    boardImageText: `To support this style in the classroom, active participation and clear expectations work well. These children benefit from a balance of freedom and structure - with opportunities to take the lead, but also clear boundaries to help them grow.`,
                    teacherParentSupportPoints: [
                        `Give chances to lead or present, paired with guidelines for turn-taking`,
                        `Break lessons into interactive parts that allow for movement or discussion`,
                        `Offer reminders about listening, taking turns, and working as part of a team`,
                        `Reinforce the importance of finishing tasks, not just starting them`,
                        `Use clear routines so they know when it’s time to be still and when it’s time to speak`,
                        `Keep home–school communication open to track energy levels, focus, and engagement`
                    ],
                    bottomHeadings: [
                        `When supported well, DI-style children often become enthusiastic learners and confident communicators. With the right balance of freedom and responsibility, `+this.childName+` can thrive both in group settings and in completing their individual goals.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `In school, children with a <b>DC style</b> are often focused, serious, and driven to do things properly. They tend to work best when expectations are clear, the environment is structured, and they’re given space to concentrate. They often prefer to work alone, follow their own method, and take pride in doing things with both speed and accuracy.`,
                        this.childName+` might be the child who double-checks instructions, works quietly and independently, and expects a lot from themselves - and sometimes from others too. They may feel uncomfortable with group work that feels disorganised or tasks that don’t seem purposeful.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `Asking thoughtful questions to understand the rules or expectations`,
                        `Being serious and focused during independent work`,
                        `Getting frustrated when others are off-task or unclear`,
                        `Avoiding noisy or overly social classroom activities`,
                        `Working quickly, but with attention to correctness`,
                    ],
                    boardImageText: `To support this style in the classroom, teachers can provide consistent routines, clear goals, and opportunities for self-directed tasks. These children benefit from being challenged in ways that feel meaningful and logical - and from encouragement to practice flexibility in less structured moments.`,
                    teacherParentSupportPoints: [
                        `Offer choice in how to complete tasks, while keeping outcomes clear`,
                        `Use written instructions alongside verbal ones for extra clarity`,
                        `Encourage moments of group learning, even in low-pressure ways`,
                        `Praise precision and thoughtful effort - not just speed or results`,
                        `Help them understand that mistakes are part of learning, not a failure`,
                        `Keep home–school communication open to monitor how they’re managing pressure or perfectionism`
                    ],
                    bottomHeadings: [
                        `When supported well, DC-style children often become strong independent learners. With encouragement and balance, `+this.childName+` can continue to build confidence, rigour, and the ability to succeed in both structured and social learning settings.`
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
    background-image: url("/images/second-term/kids-disc-images/92.svg");
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