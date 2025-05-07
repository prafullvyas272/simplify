<template>
        <section class="container-fluid bg-[url('/images/signup_bg.jpg')] bg-cover bg-no-repeat h-[100vh] overflow-auto">
            <div class="mb-20">
                <div class="mx-80  bg-white  mt-10 space-y-10 py-20 px-5 rounded-3xl">
                    <p>
                        Each question presents a set of descriptive words.
                    </p>
                    <p>
                        Please choose the one that describes you the most and the one that describes you the least. Answer as honestly as possible—there are no right or wrong answers. Your responses are essential for providing meaningful insights

                    </p>
                </div>
            </div>


            <div v-for="(question, index) in this.questions" class="panel panel-primary mx-80 mt-10" >
                <div class="panel-heading">
                    <h3 class="panel-title">Question {{index+1}} of {{this.questions.length}}</h3>
                </div>
                    <p class="mt-4 pl-5">{{ question.question }}</p>
                    <p class="pl-5"><small>Choose one option that is most like you, and one option that is least like you.</small></p>
                <div class="panel-body">
                    <table width="100%" class="table  ">
                        <tbody><tr>
                            <td width="15%"><b>Most</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m1" style="visibility:hidden"></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l1" style="visibility:hidden"></span></td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr v-for="answer in question.answers">
                            <td>
                                <div class="flex align-items-center">
                                    <RadioButton :disabled="this.answers[index].low ==  answer.value" :pt:box:class="'border-2 border-purple-600'" v-model="this.answers[index].high"  :name="answer.answer" :value="answer.value" />
                                </div>
                            </td>
                            <td>
                                <div class="flex align-items-center">
                                    <RadioButton :disabled="this.answers[index].high ==  answer.value" :pt:box:class="'border-2 border-purple-600'" v-model="this.answers[index].low" :name="answer.answer" :value="answer.value" />
                                </div>
                            </td>
                            <td>
                                <label for=""> {{answer.answer}}</label>
                            </td>

                        </tr>

                        </tbody></table>
                    <p class="msg" id="msg1" style="visibility: visible;"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <div class="w-full flex items-center justify-center">
                <Button @click="this.submit_form" class="unify_button px-8 py-2 mb-20"  label="Submit"></Button>
            </div>
        </section>



        <div :class="{'!visible': this.submitting}"  class="invisible w-full bg-gray-200 flex items-center justify-center absolute top-0 h-[100vh] z-10 opacity-80">
            <div class="loading">
                <div class='uil-ring-css' style='transform:scale(0.79);'>
                    <div></div>
                </div>
            </div>
        </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import RadioButton from "primevue/radiobutton";
import Button from "primevue/button";

export default {
    name: "AssessmentQuestions",
    components:{RadioButton, Button},
    layout:MainLayout,
    data(){
        return {
            questions:[
                {
                    question:"How do you approach problem-solving?",
                    answers:[
                        {
                            answer:"Directly and decisively",
                            value:"D"
                        },

                        {
                            answer:"With creativity and enthusiasm",
                            value:"I"
                        },

                        {
                            answer:"Calmly and methodically",
                            value:"S"
                        },

                        {
                            answer:"Carefully and analytically",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you prefer to communicate?",
                    answers:[
                        {
                            answer:"Assertively and to the point",
                            value:"D"
                        },

                        {
                            answer:"Energetically and persuasively",
                            value:"I"
                        },

                        {
                            answer:"Patiently and sympathetically",
                            value:"S"
                        },

                        {
                            answer:"Precisely and accurately",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"What motivates you most at work?",
                    answers:[
                        {
                            answer:"Achieving goals and getting results",
                            value:"D"
                        },

                        {
                            answer:"Building relationships and influencing others ",
                            value:"I"
                        },

                        {
                            answer:"Creating a harmonious and stable environment ",
                            value:"S"
                        },

                        {
                            answer:"Having clear guidelines and quality standards ",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you handle conflict?",
                    answers:[
                        {
                            answer:"Confront it head-on",
                            value:"D"
                        },

                        {
                            answer:"Try to smooth things over",
                            value:"I"
                        },

                        {
                            answer:"Avoid it if possible",
                            value:"S"
                        },

                        {
                            answer:"Analyze and address it logically ",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you prefer to make decisions?",
                    answers:[
                        {
                            answer:"Quickly and confidently",
                            value:"D"
                        },

                        {
                            answer:"With input from others",
                            value:"I"
                        },

                        {
                            answer:"Thoughtfully and cautiously ",
                            value:"S"
                        },

                        {
                            answer:"Based on facts and data",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you feel about taking risks?",
                    answers:[
                        {
                            answer:"Comfortable and willing",
                            value:"D"
                        },

                        {
                            answer:"Excited and eager",
                            value:"I"
                        },

                        {
                            answer:"Cautious and hesitant",
                            value:"S"
                        },

                        {
                            answer:"Analytical and calculating",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you manage time?",
                    answers:[
                        {
                            answer:"Efficiently and purposefully",
                            value:"D"
                        },

                        {
                            answer:"Flexibly and spontaneously",
                            value:"I"
                        },

                        {
                            answer:"Steadily and consistently ",
                            value:"S"
                        },

                        {
                            answer:"Systematically and thoroughly",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"What describes your work style?",
                    answers:[
                        {
                            answer:"Competitive and driven",
                            value:"D"
                        },

                        {
                            answer:"Outgoing and enthusiastic",
                            value:"I"
                        },

                        {
                            answer:"Cooperative and reliable",
                            value:"S"
                        },

                        {
                            answer:"Detail-oriented and meticulous",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you respond to change?",
                    answers:[
                        {
                            answer:"Embrace it as a challenge",
                            value:"D"
                        },

                        {
                            answer:"Adapt with enthusiasm",
                            value:"I"
                        },

                        {
                            answer:"Prefer stability and routine",
                            value:"S"
                        },

                        {
                            answer:"Analyze and plan for it",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you handle criticism?",
                    answers:[
                        {
                            answer:"Take it in stride and move on ",
                            value:"D"
                        },

                        {
                            answer:"Seek to understand and improve",
                            value:"I"
                        },

                        {
                            answer:"Take it personally and feel hurt",
                            value:"S"
                        },

                        {
                            answer:" Reflect on it and adjust accordingly",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you approach new tasks?",
                    answers:[
                        {
                            answer:"Dive in and get started",
                            value:"D"
                        },

                        {
                            answer:" Get others involved and excited",
                            value:"I"
                        },

                        {
                            answer:" Plan and organize carefully",
                            value:"S"
                        },

                        {
                            answer:" Research and prepare thoroughly",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you manage stress?",
                    answers:[
                        {
                            answer:" Push through and stay focused",
                            value:"D"
                        },

                        {
                            answer:" Talk to others and seek support",
                            value:"I"
                        },

                        {
                            answer:" Stay calm and maintain routine",
                            value:"S"
                        },

                        {
                            answer:" Analyze the situation and find solutions",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you prefer to work in a team?",
                    answers:[
                        {
                            answer:" Take charge and lead",
                            value:"D"
                        },

                        {
                            answer:" Motivate and energize others",
                            value:"I"
                        },

                        {
                            answer:" Support and encourage teammates",
                            value:"S"
                        },

                        {
                            answer:" Ensure accuracy and organization",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you set goals?",
                    answers:[
                        {
                            answer:" Ambitiously and high-reaching",
                            value:"D"
                        },

                        {
                            answer:" Collaboratively and optimistically",
                            value:"I"
                        },

                        {
                            answer:" Realistically and practically",
                            value:"S"
                        },

                        {
                            answer:" Precisely and achievable",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you handle feedback?",
                    answers:[
                        {
                            answer:" Appreciate directness",
                            value:"D"
                        },

                        {
                            answer:" Value positive reinforcement",
                            value:"I"
                        },

                        {
                            answer:" Prefer gentle and supportive feedback",
                            value:"S"
                        },

                        {
                            answer:" Want constructive and detailed feedback",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you approach learning new skills?",
                    answers:[
                        {
                            answer:" Jump in and learn by doing",
                            value:"D"
                        },

                        {
                            answer:" Seek out new experiences and people",
                            value:"I"
                        },

                        {
                            answer:" Take a steady and consistent approach",
                            value:"S"
                        },

                        {
                            answer:" Study and understand thoroughly",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you deal with uncertainty?",
                    answers:[
                        {
                            answer:" Take control and decide",
                            value:"D"
                        },

                        {
                            answer:" Stay positive and flexible",
                            value:"I"
                        },

                        {
                            answer:" Seek reassurance and stability",
                            value:"S"
                        },

                        {
                            answer:" Gather information and analyze",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you approach deadlines?",
                    answers:[
                        {
                            answer:" Work efficiently to meet them",
                            value:"D"
                        },

                        {
                            answer:" Stay motivated by the challenge",
                            value:"I"
                        },

                        {
                            answer:" Plan ahead to avoid last-minute stress",
                            value:"S"
                        },

                        {
                            answer:" Ensure every detail is perfect",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you handle multitasking?",
                    answers:[
                        {
                            answer:" Prioritize and tackle tasks head-on",
                            value:"D"
                        },

                        {
                            answer:" Keep things dynamic and engaging",
                            value:"I"
                        },

                        {
                            answer:" Focus on one task at a time",
                            value:"S"
                        },

                        {
                            answer:" Organize and schedule tasks methodically",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you respond to others' emotions?",
                    answers:[
                        {
                            answer:" Stay focused on the goal",
                            value:"D"
                        },

                        {
                            answer:" Empathize and encourage",
                            value:"I"
                        },

                        {
                            answer:" Offer support and understanding",
                            value:"S"
                        },

                        {
                            answer:" Listen and provide practical advice",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you approach collaboration?",
                    answers:[
                        {
                            answer:" Take a leading role",
                            value:"D"
                        },

                        {
                            answer:" Foster teamwork and enthusiasm",
                            value:"I"
                        },

                        {
                            answer:" Facilitate harmony and cooperation",
                            value:"S"
                        },

                        {
                            answer:" Ensure clear structure and roles",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you view rules and guidelines?",
                    answers:[
                        {
                            answer:" See them as flexible",
                            value:"D"
                        },

                        {
                            answer:" Follow them with enthusiasm",
                            value:"I"
                        },

                        {
                            answer:" Respect and adhere to them",
                            value:"S"
                        },

                        {
                            answer:" Study and follow them closely",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you handle setbacks?",
                    answers:[
                        {
                            answer:" Move forward and stay determined",
                            value:"D"
                        },

                        {
                            answer:" Stay optimistic and find new opportunities",
                            value:"I"
                        },

                        {
                            answer:" Remain calm and find a solution",
                            value:"S"
                        },

                        {
                            answer:" Analyze what went wrong and fix it",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you like to receive information?",
                    answers:[
                        {
                            answer:" Brief and to the point",
                            value:"D"
                        },

                        {
                            answer:" In a lively and engaging way",
                            value:"I"
                        },

                        {
                            answer:" Clearly and concisely",
                            value:"S"
                        },

                        {
                            answer:" In a detailed and thorough manner",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you approach planning?",
                    answers:[
                        {
                            answer:" Strategically and with vision",
                            value:"D"
                        },

                        {
                            answer:" Collaboratively and creatively",
                            value:"I"
                        },

                        {
                            answer:" Practically and with stability",
                            value:"S"
                        },

                        {
                            answer:" Systematically and with precision",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you deal with uncertainty?",
                    answers:[
                        {
                            answer:" Take control and decide",
                            value:"D"
                        },

                        {
                            answer:" Stay positive and flexible",
                            value:"I"
                        },

                        {
                            answer:" Seek reassurance and stability",
                            value:"S"
                        },

                        {
                            answer:" Gather information and analyze",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you prefer to be recognized?",
                    answers:[
                        {
                            answer:" For achievements and results",
                            value:"D"
                        },

                        {
                            answer:" For contributions and energy",
                            value:"I"
                        },

                        {
                            answer:" For loyalty and reliability",
                            value:"S"
                        },

                        {
                            answer:" For accuracy and quality",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you approach solving problems?",
                    answers:[
                        {
                            answer:" Directly and decisively",
                            value:"D"
                        },

                        {
                            answer:" Creatively and collaboratively",
                            value:"I"
                        },

                        {
                            answer:" Calmly and practically",
                            value:"S"
                        },

                        {
                            answer:" Thoroughly and analytically",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you handle routine tasks?",
                    answers:[
                        {
                            answer:" Seek ways to improve efficiency",
                            value:"D"
                        },

                        {
                            answer:" Add variety and make them fun",
                            value:"I"
                        },

                        {
                            answer:" Follow them consistently",
                            value:"S"
                        },

                        {
                            answer:" Ensure they are done correctly",
                            value:"C"
                        },

                    ]
                },
                {
                    question:"How do you react to pressure?",
                    answers:[
                        {
                            answer:" Thrive and stay motivated",
                            value:"D"
                        },

                        {
                            answer:" Keep things positive and light",
                            value:"I"
                        },

                        {
                            answer:" Stay calm and focused",
                            value:"S"
                        },

                        {
                            answer:" Plan and control the situation",
                            value:"C"
                        },

                    ]
                },
            ],
            answers:[],
            submitting:false,
        }
    },
    methods: {
        submit_form() {

            this.submitting=true;
            axios.post("https://todai.blueskythinkingtesting.com/unify/api/assessment", {
                email: this.$page.props.auth.user.email,
                answers: this.answers
            }).then((response) => {
                if (response.data.status==="Success")
                    window.location.href="/dashboard";
            })
        }

    },
    beforeMount() {
        const options = ["D", "I", "S", "C"];
        for ( let i=0 ; i < this.questions.length ; i ++)
        {
            const randomHigh = options[Math.floor(Math.random() * options.length)];
            const randomLow = options[Math.floor(Math.random() * options.length)];

            this.answers.push({
                high: randomHigh,
                low: randomLow
            });
        }

    }
}
</script>


<style scoped>
.panel {
    border-radius: 1.5rem !important;
    border-width: 0px !important;
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
    border-color: #337ab7;
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
}
.panel-primary > .panel-heading{
    background-repeat: repeat-x;
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;

}
.panel-heading {
    border-top-left-radius: 1.5rem !important;
    border-top-right-radius: 1.5rem !important;
    border-width: 0px !important;
    background-image: linear-gradient(to right, var(--tw-gradient-stops)) !important;
    --tw-gradient-from: #DDB7FF var(--tw-gradient-from-position);
    --tw-gradient-to: rgb(221 183 255 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    --tw-gradient-to: rgb(255 215 245 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), #FFD7F5 var(--tw-gradient-via-position), var(--tw-gradient-to);
    --tw-gradient-to: rgb(255 248 227 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), #FFF8E3 var(--tw-gradient-via-position), var(--tw-gradient-to);
    --tw-gradient-to: #FF83DF var(--tw-gradient-to-position);
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
}
.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: inherit;
}
.panel-body {
    display: flex;
    flex-direction: row;
    border-width: 0px !important;
    padding-left: 2.5rem !important;
    padding-right: 2.5rem !important;
    padding: 15px;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    max-width: 60% !important;
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse;
    background-color: transparent;
    border-spacing: 0;
}
tr {
    border-width: 0px !important;
}
.table > tbody > tr > td {
    border-width: 0px !important;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 8px;
    padding-top: 8px;
    padding-bottom: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    border-top-width: 1px;
}
.glyphicon {
    color: #00B200;
    padding-left: 5px;
    font-size: 1.5em;
}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.glyphicon-ok::before {
    content: "\e013";
}
.msg {
    max-width: 40%;
    display: flex;
    justify-items: center;
    align-items: center;
}


*.hidden {
    display: none !important;
}

div.loading{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(16, 16, 16, 0.5);
}

@-webkit-keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-webkit-keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-moz-keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-ms-keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-moz-keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-webkit-keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-o-keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes uil-ring-anim {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
.uil-ring-css {
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 200px;
    height: 200px;
}
.uil-ring-css > div {
    position: absolute;
    display: block;
    width: 160px;
    height: 160px;
    top: 20px;
    left: 20px;
    border-radius: 80px;
    box-shadow: 0 6px 0 0 #ffffff;
    -ms-animation: uil-ring-anim 1s linear infinite;
    -moz-animation: uil-ring-anim 1s linear infinite;
    -webkit-animation: uil-ring-anim 1s linear infinite;
    -o-animation: uil-ring-anim 1s linear infinite;
    animation: uil-ring-anim 1s linear infinite;
}
</style>
