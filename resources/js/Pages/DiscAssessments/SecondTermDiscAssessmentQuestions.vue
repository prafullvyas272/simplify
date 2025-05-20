<template>

    <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
        <div class="w-1/6 img-logo">
                <img src="/images/simplify-images/simplify-latest.png" class="max-h-20" alt="Logo">
        </div>
    </div>



        <section class="middle_section">

            <div class="container" v-if="questions.length">
                <div class="progress">
                    <!-- Adjust progress bar width dynamically based on the current question -->
                    <div class="progress-bar" role="progressbar"
                        :style="{ width: (currentQuestionIndex + 1) * (100 / questions.length) + '%' }" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <!-- Display the current question based on the currentQuestionIndex -->

                <div class="row align-items-center">
                    <div v-if="questions[currentQuestionIndex].image != null" class="col-lg-6">
                        <div class="question-image"><img
                                :src="questions[currentQuestionIndex].image ? questions[currentQuestionIndex].image : '/images/Ans_que.jpg'"
                                alt="Question Image information"></div>
                    </div>
                    <div :class="questions[currentQuestionIndex].image != null ? 'col-lg-6' : 'col-lg-12'" class="col-lg-6">
                        <div>
                            <div class="question text-center" :class="childDetail.child_type === 'kids' ? 'h-24' : ''">{{ currentQuestionIndex + 1 }}. {{
                                questions[currentQuestionIndex].question }}
                                <span v-if="childDetail.child_type === 'kids'" @mouseover="keepOpen" @mouseleave="closeModal"
                                    class="icon-span inline-flex items-center justify-center w-8 h-8 border-2 border-solid border-black rounded-full bg-white text-gray-700">
                                    <i class="fas fa-info">i</i>
                                </span>


                            </div>
                            <div v-if="childDetail.child_type === 'teen'" class="ans_box">
                                <table width="100%" class="table  ">
                                    <tbody>
                                        <tr>
                                            <td width="15%"><b>Most</b><span class="glyphicon glyphicon-ok "
                                                    aria-hidden="true" alt="ok" id="m1" style="visibility:hidden"></span>
                                            </td>
                                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok "
                                                    aria-hidden="true" alt="ok" id="l1" style="visibility:hidden"></span>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr v-for="(answer, index) in questions[currentQuestionIndex].answers"
                                            :key="answer.value">
                                            <!-- Most Option -->
                                            <td>
                                                <input type="radio" v-model="selectedAnswer[currentQuestionIndex].high"
                                                    @change="validatorErrorRemoved" :name="`high-${currentQuestionIndex}`"
                                                    :value="answer.value"
                                                    :disabled="selectedAnswer[currentQuestionIndex].low === answer.value"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" />
                                            </td>

                                            <!-- Least Option -->
                                            <td>
                                                <input type="radio" v-model="selectedAnswer[currentQuestionIndex].low"
                                                    @change="validatorErrorRemoved" :name="`low-${currentQuestionIndex}`"
                                                    :value="answer.value"
                                                    :disabled="selectedAnswer[currentQuestionIndex].high === answer.value"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" />
                                            </td>

                                            <!-- Answer Text -->
                                            <td class="ans_box_teen">
                                                <label>{{ answer.answer }}</label>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div v-if="childDetail.child_type === 'kids'" class="ans_box">

                                <ul :class="questions[currentQuestionIndex].image === null ? 'no-image' : ''"
                                    class="donate-now">
                                    <li v-for="answer in questions[currentQuestionIndex].answers" :key="answer.value"
                                        class="ans_box">
                                        <input type="radio" :id="answer.value"
                                            v-model="selectedAnswer[currentQuestionIndex]" :value="answer.value" />
                                        <label :for="answer.value">{{ answer.answer }}</label>

                                    </li>

                                    <div v-if="showInfoModal"
                                        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-[9999]">
                                        <div
                                            class="p-6 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] p-6 rounded-lg shadow-lg w-80 z-[10000]">
                                            <h3 class="text-lg font-semibold text-center">Note for Parents:</h3>
                                            <h3 class="text-lg font-semibold text-center">Why ask this?</h3>
                                            <h3 class="text-lg mt-2">
                                                {{ questions[currentQuestionIndex].info_text }}
                                            </h3>
                                        </div>
                                    </div>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div v-if="selectedOptionValidator" style="color:#a71414;"><span>Please select both 'Most' and 'Least'
                            options before proceeding.</span></div>
                </div>
                <!-- Next or Submit Button -->
                <div class="text-center text-md-end mt-4">
                    <button v-if="currentQuestionIndex > 0" @click="previousQuestion"
                        class="commen_btn float-left">Back</button>
                    <button v-if="currentQuestionIndex < questions.length - 1" @click="nextQuestion"
                        class="commen_btn">Next</button>
                    <button v-else @click="submit_form" class="commen_btn">{{ submitting ?
                        "Processing..." : 'Submit' }}</button>
                </div>
            </div>
            <LoadingSpinner v-else :visible="true" message="Loading questions..." />
          <LoadingSpinner v-if="submitting" :visible="true" message="Submitting Answers..." />

        </section>


    </template>
    <style scoped>
    body {
        font-family: 'Poppins';
    }

    .question,
    .ans_box {
        color: #091532;
    }

    .ans_box .no-image {
        columns: 2;
    }

    .ans_box .no-image .ans_box {
        display: inline-flex;
    }

    .ans_box_teen label {
        font-size: large;
        font-family: 'Poppins';
        color: #091532;
        font-weight: 500;
    }

    .info-box {
        background: from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]
    }
    .icon-span {
        cursor: pointer;
    }
    .question-image {
        margin-left: 70px;
        width: 72%;
    }
    </style>
    <script>
    import RadioButton from "primevue/radiobutton";
    import axios from 'axios';
    import LoadingSpinner from "../../Components/LoadingSpinner.vue";
    export default {
        name: "SecondTermDiscAssessmentQuestions",
        components: {
            LoadingSpinner
        },
        props: {
            childId: String,
            childDetail: {
                type: Object,
                default: () => ({}), // Provide an empty object as the default value
            },
            assessmentApiUrl: String,
        },
        data() {
            return {
                questions: [], // Store fetched questions here
                currentQuestionIndex: 0, // Track which question is being displayed
                selectedAnswer: [], // Store selected answers for each question
                answers: [],
                submitting: false,
                selectedOptionValidator: false,
                showInfoModal: false,
            };
        },
        methods: {
            keepOpen() {
                this.showInfoModal = true;
            },
            closeModal() {
                this.showInfoModal = false;
            },
            shuffle(array) {
                for (let i = array.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]];
                }
                return array;
            },
            validatorErrorRemoved() {
                this.selectedOptionValidator = false;
            },

            validateQuestion() {
                if (this.childDetail.child_type === 'teen') {
                    // Validate if both 'Most' and 'Least' options are selected for the current question
                    const selectedHigh = this.selectedAnswer[this.currentQuestionIndex]?.high;
                    const selectedLow = this.selectedAnswer[this.currentQuestionIndex]?.low;

                    if (!selectedHigh || !selectedLow) {
                        this.selectedOptionValidator = true;
                        return false;
                    }
                }
                return true;
            },
            previousQuestion() {
                // Navigate to the previous question
                if (this.currentQuestionIndex > 0) {
                    this.currentQuestionIndex--;
                }
            },
            nextQuestion() {
                if (this.childDetail.child_type === 'teen') {
                    // Validate if both 'Most' and 'Least' options are selected for the current question
                    const selectedHigh = this.selectedAnswer[this.currentQuestionIndex]?.high;
                    const selectedLow = this.selectedAnswer[this.currentQuestionIndex]?.low;

                    if (!selectedHigh || !selectedLow) {
                        this.selectedOptionValidator = true;
                        return;
                    }

                    // Store the selected answer for teens
                    this.answers[this.currentQuestionIndex] = {
                        question: this.questions[this.currentQuestionIndex].question,
                        answer: {
                            most: selectedHigh,
                            least: selectedLow,
                        },
                    };
                } else {
                    // For 'kids', simply store the selected answer
                    this.answers[this.currentQuestionIndex] = {
                        question: this.questions[this.currentQuestionIndex].question,
                        answer: this.selectedAnswer[this.currentQuestionIndex],
                    };
                }

                // Move to the next question, if available
                if (this.currentQuestionIndex < this.questions.length - 1) {
                    this.currentQuestionIndex++;
                }
            },
            submit_form() {

                if (this.submitting) return; // Prevent multiple submissions
                if (!this.validateQuestion()) {
                    return;
                }
                this.submitting = true;

                axios.post(route('store.user-que-ans'), {
                    email: this.$page.props.auth.user.email,
                    child_id: this.childDetail.id,
                    type: "disc",
                    ansData: this.questions.map((question, index) => ({
                        question: question.id,
                        answer: this.selectedAnswer[index]
                    }))
                })
                    .then((response) => {
                        if (response.data.status === "Success") {

                            var userType = "kids";

                            if (this.childDetail.child_type === 'teen') {
                                userType = "teens";
                            }

                            const payload = {
                                user_info: {
                                    email: this.$page.props.auth.user.email,
                                    //child_id: this.$page.props.auth.user.id,
                                    child_id: this.childDetail.id,
                                    type: userType // Static value as required
                                },
                                disc: response.data.disc,
                                learn: response.data.learn,
                            };
                            // Post the data to the API
                            let apiUrl = this.assessmentApiUrl + 'result'
                            axios
                                .post(apiUrl, payload)
                                .then((response) => {
                                    // console.log(response);
                                    // this.submitting = false;
                                    if (response.data.status === "Success") {
                                        // window.location.href = "/dashboard";
                                        axios
                                            .post(route('user-report.store'), {
                                                disc_report_url: response.data.data.disc_report_url ?? null,
                                                learn_report_url: response.data.data.learn_report_url ?? null,
                                                child_id: this.childDetail.id,
                                                style: response.data.data.disc_scores.style ?? null,
                                                disc_scores: response.data.data.disc_scores.disc_scores ?? null,
                                                learn_style: response.data.data.learn_scores.style ?? null,
                                                learn_scores: response.data.data.learn_scores.learn_scores ?? null,

                                            }).then(response => {
                                                window.location.href = `/welcome/${this.childDetail.id}`;
                                        })
                                    }
                                })
                                .catch((error) => {
                                    this.submitting = false;
                                    console.error("There was an error!", error);
                                })
                                .finally(() => {
                                    this.submitting = false;
                                });
                        }
                    })
                    .catch((error) => {
                        console.error("There was an error!", error);
                        this.submitting = false;
                    })
                    .finally(() => {
                        // this.submitting = false;
                    });

            },



            fetchQuestions() {
                // Fetch questions from the API

                var userType = 'kids';

                if (this.childDetail.child_type === 'teen') {
                    userType = 'teens';
                }

                var getQuestionUrlEndPoint = this.assessmentApiUrl + `disc?type=${userType}`;

                axios
                    .get(getQuestionUrlEndPoint)
                    .then((response) => {
                        console.log("API Response:", response.data); // Log the entire response

                        if (response.data && response.data.data) {
                            // Parse and format the questions into your desired format
                            this.questions = response.data.data.map(item => ({
                                question: item.question.en,
                                image: item.image,
                                info_text: item.info_text,
                                id: item.id,
                                answers: this.shuffle(item.options.map((option) => ({
                                    answer: option.value.en,
                                    value: option.id
                                })))
                            }));

                            this.initializeAnswers();
                        } else {
                            console.error("Questions not found in the API response");
                        }
                    })
                    .catch((error) => {
                        console.error("Error fetching questions:", error);
                    });
            },
            initializeAnswers() {
                // Ensure 'questions' is not empty before initializing answers
                if (this.questions.length) {
                    this.questions.forEach((question, index) => {
                        if (this.childDetail.child_type === 'teen') {
                            // this.selectedAnswer.push({ high: question.answers[0].value, low: question.answers[3].value });
                            this.selectedAnswer.push({ high: null, low: null });
                        } else {
                            this.selectedAnswer.push(question.answers[0].value); // Select the first answer by default
                        }

                    });
                } else {
                    console.error("No questions available to initialize answers.");
                }
            },
        },
        mounted() {
            // Fetch the questions when the component is mounted
            this.fetchQuestions();
        },
    };
    </script>
