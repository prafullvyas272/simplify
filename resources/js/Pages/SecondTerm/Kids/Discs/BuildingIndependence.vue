<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Building Independence and Responsibility</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-6">
                <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index" class="">
                    <div class="flex justify-center items-center">
                        <img class="" :src="'/images/second-term/kids-disc-images/47.png'" alt="" />
                    </div>
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/53.png'"
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
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/55.svg'"
                        alt="" />
                </div>
                <div class="col-6">
                    <div v-for="noticePoint in reportData[discStyle]?.noticePoints" class="col-12">
                        <p class="font-bold ml-2 my-2">
                            {{ noticePoint }}
                        </p>
                    </div>
                </div>

            </div>
            <div class="row p-6">
                <div class="col-12">
                    <div class="flex justify-center items-center">
                        <img class="ball" :src="'/images/second-term/kids-disc-images/47.png'" alt="" />
                    </div>
                </div>
                <div class="col-12 flex items-center">
                    <p class="px-2">
                        {{ reportData[discStyle]?.middleHeading }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-green-400">
                    How you can support {{ childName }} in growing responsibility:
                </h4>
                <div v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints" :key="index" class="row">
                    <div class="row p-6">
                        <div class="col-9 offset-2 flex items-center">
                            <p v-html="supportPoint" class="font-bold">
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="flex justify-center items-center">
                                <img class="w-120" :src="getSupportImagePath(index)" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
            <div class="text-black px-4 py-2 rounded">
                <div v-for="bottomHeading in reportData[discStyle]?.bottomHeadings" class="col-12 flex px-20 font-bold justify-center items-center">
                    <p v-html="bottomHeading">
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
                        `Children with an <b> SI style </b> are often dependable and caring, especially when they feel supported and appreciated. They enjoy helping others and usually do well in routines that feel calm and familiar. They may not push for independence right away, but they often take quiet responsibility when they feel ready.`,
                        `At times, they may avoid taking initiative if they're unsure or worried about making the wrong choice. They may prefer to follow others rather than lead, and they often seek reassurance before trying something on their own.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Helping out when asked, especially if it feels familiar`,
                        `Wanting praise or reassurance before acting independently`,
                        `Preferring to follow routines instead of trying new ways`,
                        `Holding back if something feels uncertain or risky`,
                        `Being quietly responsible but not always confident`
                    ],
                    middleHeading: `This gentle nature is something to celebrate. Still, it's important to give them safe opportunities to take initiative and make choices for themselves - even when things aren't perfect.`,
                    supportPoints: [
                        `Start with small, clear tasks. Give simple roles they can do independently, like feeding a pet or setting the table.`,
                        `Celebrate follow-through. Highlight when they complete something without being reminded.`,
                        `Reflect calmly together. Ask, "How did that feel?" or "Would you do anything differently next time?"`,
                        `Use gentle encouragement. Praise quiet effort, not just results or speed.`
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `With time and steady support, `+ this.childName +` can grow into someone who acts with quiet confidence - taking responsibility not for attention, but because they feel secure and capable.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an <b>SC style</b> are often dependable and conscientious. They want to do things properly and may take pride in getting tasks right, following instructions, and helping in quiet, steady ways. They are more likely to wait for guidance than to jump in - especially if they feel uncertain or worried about making a mistake.`,
                        `They may not ask for independence, but they often respond well to it when it’s introduced gently and with clear expectations. They can become overly reliant on reassurance, particularly if they’re afraid of getting something wrong.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Wanting clear direction before starting a task`,
                        `Completing familiar tasks well, but hesitating with new ones`,
                        `Checking in frequently to see if they’ve done it “right”`,
                        `Avoiding taking initiative if the outcome isn’t clear`,
                        `Being responsible in small, routine ways but needing support to take ownership`,
                    ],
                    middleHeading: `This careful, steady nature is a real strength. To build independence, they benefit from consistent routines, gentle encouragement, and space to try things without fear of being wrong.`,
                    supportPoints: [
                        `Give clear, structured tasks. Start with simple responsibilities they can manage independently.`,
                        `Reassure without over-correcting. Let them know their effort is trusted, even if the result isn’t perfect.`,
                        `Praise follow-through and attention to detail. Recognise what they naturally do well.`,
                        `Encourage decision-making. Ask, “What do you think is the best next step?”`
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `With time and support, `+ this.childName +` can grow into someone who is quietly dependable - taking responsibility with care, and learning to trust their own ability without constant reassurance.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a <b>Supportive style</b> often like to help and be part of a team. They may quietly take on small tasks or support others without being asked. However, they may wait for instructions or avoid taking the lead, especially if they’re unsure or don’t want to make a mistake.`,
                        `These children may hesitate to do things independently if they fear getting it wrong or letting someone down. They are more likely to say yes to keep the peace, rather than speak up about their own preferences. Helping them feel trusted and capable goes a long way in building confidence and ownership.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Waiting for someone to tell them what to do`,
                        `Helping others more than asking for help themselves`,
                        `Agreeing to things just to be polite`,
                        `Being unsure when plans change or decisions are unclear`,
                        `Completing tasks well once they feel confident`,
                    ],
                    middleHeading: `This sense of cooperation is worth encouraging, but it’s important to guide them towards speaking up and taking initiative. Without support, they may become overly reliant on others or avoid responsibility altogether to avoid pressure or conflict.`,
                    supportPoints: [
                        `<h5><b>Give meaningful tasks.</b></h5> <h6>Let them take care of something small but consistent, like feeding a pet or choosing which book to read before bed. Make sure it feels like something they can succeed at.</h6>`,

                        `<h5><b>Allow natural consequences.</b></h5> <h6>If they forget to complete a task, support them in understanding what happened and how to fix it.</h6>`,

                        `<h5><b>Talk through outcomes.</b></h5> <h6>Ask, “How did that go?” or “What would you change next time?”</h6>`,

                        `<h5><b>Use praise for follow-through, not just helpfulness.</b></h5> <h6>S-style children often support others. Make sure they’re also recognised when they complete something independently.</h6>`,
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `Over time, helping `+this.childName+` take small steps on their own builds trust and self-belief. Not just someone who quietly helps, but someone who feels confident in their ability to lead and follow through.`

                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an <b>IS style</b> often enjoy helping and being involved - especially when it feels appreciated and supportive. They are usually reliable when others are depending on them, and they often go out of their way to make sure everyone feels okay. However, they may hesitate to take charge or act independently if they’re unsure of what to do or worried about making a mistake.`,
                        `They may need encouragement to take ownership without constant reassurance. Because they value connection so much, they might agree to things just to keep the peace - even if they don’t feel ready or comfortable.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Helping out eagerly when others are around`,
                        `Following through better with praise and encouragement`,
                        `Avoiding tasks that feel too unfamiliar or high-pressure`,
                        `Wanting reassurance that they’re doing things “right”`,
                        `Preferring teamwork over solo responsibility`,
                    ],
                    middleHeading: `This thoughtful, kind nature is a real strength. Still, it’s helpful to support their ability to make decisions, complete tasks independently, and take pride in what they’ve done on their own - even without someone watching.`,
                    supportPoints: [
                        `<h5><b>Give meaningful tasks.</b></h5> <h6>Start with manageable jobs they can complete on their own, then praise the result.</h6>`,
                        `<h5><b>Allow natural consequences.</b></h5> <h6>If something is forgotten, talk it through gently rather than stepping in right away.</h6>`,
                        `<h5><b>Talk through outcomes.</b></h5> <h6>Ask, “How did that feel?” or “What might you do differently next time?”</h6>`,
                        `<h5><b>Use praise for quiet effort.</b></h5> <h6>These children may not ask for attention, but they benefit from being seen and acknowledged for doing their best.</h6>`,
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `Over time, helping `+this.childName+` grow in confidence and self-reliance helps them become someone who shows kindness with strength - and who trusts themselves to get things done.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> often show early signs of independence. They enjoy doing things their way, taking initiative, and leading the charge. They’re usually confident in making decisions and may prefer to set the pace rather than follow others. When they’re excited about something, they act quickly and bring others along with them.`,
                        `However, they may avoid less exciting tasks or lose focus if no one is watching. They may also push back against instructions they don’t agree with, especially if they feel their ideas aren’t being heard. Building responsibility means helping them stay focused through to the end - not just when things feel fun or easy.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Taking charge without being asked`,
                        `Wanting to do things independently, in their own way`,
                        `Avoiding repetitive or slow routines`,
                        `Needing reminders to complete what they’ve started`,
                        `Responding strongly when they feel limited or corrected`,
                    ],
                    middleHeading: `This natural sense of initiative is a strength worth encouraging. Still, it’s important to support their ability to stick with tasks, accept guidance, and take ownership - even when something feels less exciting.`,
                    supportPoints: [
                        `<h5><b>Give meaningful tasks.</b></h5> <h6>Let them lead something from start to finish, with clear expectations.</h6>`,
                        `<h5><b>Allow natural consequences.</b></h5> <h6>If something isn’t done properly, help them reflect on the impact and how they can improve next time.</h6>`,
                        `<h5><b>Talk through outcomes.</b></h5> <h6>Ask, “What worked well?” or “What would you do differently next time?”</h6>`,
                        `<h5><b>Use praise for follow-through.</b></h5> <h6>Recognition matters - highlight when they stick with something or finish it well, not just when they start with energy.</h6>`,
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `Over time, helping `+this.childName+` stay focused and follow through helps build real independence - the kind that goes beyond ideas and becomes something others can rely on.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> often want to feel included and liked. They enjoy being part of group plans, having a say in decisions, and being recognised for their ideas. `+this.childName+` may be quick to volunteer for something fun or creative, but might not always follow through once the excitement fades.`,
                        `These children like tasks that feel light-hearted or social. They’re less motivated by rules or routines, and may need help learning how to stay focused on something even when it’s no longer interesting. Giving them ownership in small ways can help them build a sense of responsibility without it feeling too heavy.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Wanting to be involved when something sounds fun`,
                        `Starting strong but losing interest midway`,
                        `Forgetting steps or leaving things half-done`,
                        `Getting distracted by people or conversations`,
                        `Responding better to encouragement than correction`,
                    ],
                    middleHeading: `This sense of independence is worth encouraging, but it’s important to guide it gently. Without support, their free-spirited nature can lead to missed tasks, forgetfulness, or leaving others to pick up the pieces. What they often need is a little more structure and regular reminders to stick with things.`,
                    supportPoints: [
                        `<h5><b>Give meaningful tasks.</b></h5> <h6>Let them help with something that feels fun or expressive - like planning part of a day out, decorating a space, or writing a card. The more creative or social it feels, the more likely they are to follow through.</h6>`,
                        `<h5><b>Allow natural consequences.</b></h5> <h6>If they forget to complete a task, gently show them the result. This helps connect actions with outcomes.</h6>`,
                        `<h5><b>Talk through outcomes.</b></h5> <h6>Ask, “What helped you remember that?” or “What could we do differently next time?”</h6>`,
                        `<h5><b>Use praise for follow-through, not just ideas.</b></h5> <h6>I-style children are great at getting started. Make sure they’re also praised when they complete something with care and consistency.</h6>`,
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `Over time, helping `+this.childName+` balance freedom with responsibility will set them up to be both expressive and reliable. Not just someone who brings energy, but someone others can count on too.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> are often naturally independent. They like having control over what they do and are quick to take charge of situations. They may volunteer for tasks before others do, share big ideas confidently, or lead the way in group activities. This self-starting energy is a real strength - but they may need reminders to stay consistent and finish what they’ve started.`,
                        `Because they like freedom and variety, they might resist doing something that feels boring, slow, or repetitive. They may also challenge rules or instructions if they don’t see the point. Responsibility grows when they learn that follow-through matters just as much as enthusiasm.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Taking initiative without needing reminders`,
                        `Wanting to lead or take the spotlight`,
                        `Avoiding tasks that feel routine or slow`,
                        `Needing praise and encouragement to stay engaged`,
                        `Starting quickly but losing interest if results aren’t fast`,
                    ],
                    middleHeading: `This bold, energetic nature is something to encourage - it helps them build confidence and independence early on. But it’s just as important to help them develop consistency, patience, and a sense of ownership.`,
                    supportPoints: [
                        `<h5><b>Give meaningful tasks.</b></h5> <h6>Let them take charge of something visible, like planning part of a day out, then hold them to it.</h6>`,
                        `<h5><b>Allow natural consequences.</b></h5> <h6>If they forget to do something, help them see what happened and how they can take ownership next time.</h6>`,
                        `<h5><b>Talk through outcomes.</b></h5> <h6>Ask, “What worked well?” or “What would you change next time?”</h6>`,
                        `<h5><b>Use praise for follow-through, not just enthusiasm.</b></h5> <h6>They thrive on recognition - so use it to highlight reliability, not just personality.</h6>`,
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `Over time, helping `+this.childName+` stay consistent and accountable builds true independence. Not just the kind that starts strong - but the kind that sees things through and takes pride in doing so.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> often show independence from an early age. They like to be trusted with responsibility, especially when they can do things their own way. These children often prefer working alone, setting their own pace, and holding themselves to high standards. When they feel in control and clear about expectations, they usually follow through well.`,
                        `However, if the task feels unnecessary or poorly explained, they may resist it altogether. They are more likely to push back than go along with something that doesn’t make sense to them. They may also avoid tasks if they feel unprepared or unsure of the outcome.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Taking control of tasks without being asked`,
                        `Holding themselves (and others) to high standards`,
                        `Questioning instructions they don’t agree with`,
                        `Avoiding repetitive or unclear routines`,
                        `Completing tasks well once they understand the purpose`,
                    ],
                    middleHeading: `This thoughtful, self-directed nature is worth encouraging. Still, it’s important to support their ability to follow through even when they don’t fully enjoy the task - and to help them accept that not everything has to be perfect.`,
                    supportPoints: [
                        `<h5><b>Give meaningful tasks.</b></h5> <h6>Let them take on something where quality matters - like checking a list or leading a routine.</h6>`,
                        `<h5><b>Allow natural consequences.</b></h5> <h6>If something isn’t completed, help them reflect rather than step in right away.</h6>`,
                        `<h5><b>Talk through outcomes.</b></h5> <h6>Ask, “What would you change next time?” or “Did the outcome match what you expected?”</h6>`,
                        `<h5><b>Use praise for commitment and quality.</b></h5> <h6>These children value being recognised for smart effort and precision.</h6>`,
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `Over time, helping `+this.childName+` stay consistent, flexible, and open to feedback helps build a deeper kind of independence - one that’s grounded not just in control, but in resilience and responsibility.`
                    ],
                },
                C: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [

                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
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
.board-image {
    background-image: url("/images/second-term/kids-disc-images/60.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>