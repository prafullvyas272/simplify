<template>
   <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
    <div class="w-1/6 img-logo">
        <!-- <Link :href="route('profile.report')">
            <img src="/images/simplify-images/simplify-latest.png" class="h-full object-contain" alt="Logo">
            hi
        </Link> -->
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
                <div v-if="childDetail.child_type === 'kids'" class="col-lg-6">
                    <div class="question-image"><img
                            :src="questions[currentQuestionIndex].image ? questions[currentQuestionIndex].image : '/images/Ans_que.jpg'"
                            alt="Question Image information"></div>
                </div>
                <div :class="childDetail.child_type === 'teen' ? 'col-lg-12' : 'col-lg-6'">

                    <div >
                        <div class="question text-center h-24">
                            {{ currentQuestionIndex + 1 }}. {{ questions[currentQuestionIndex].question }}
                            <span v-if="childDetail.child_type === 'kids'" @mouseover="keepOpen"
                                @mouseleave="closeModal"
                                class="icon-span inline-flex items-center justify-center w-8 h-8 border-2 border-solid border-black rounded-full bg-white text-gray-700">
                                <i class="fas fa-info">i</i>
                            </span>
                        </div>
                        <div v-if="childDetail.child_type === 'teen'" class="ans_box">

                            <ul class="donate-now">
                                <li v-for="(answer, index) in questions[currentQuestionIndex].answers"
                                    :key="answer.value"
                                    :class="['ans_box_item', selectedAnswer[currentQuestionIndex] === answer.value ? 'active' : '']">
                                    <input type="radio" :id="answer.value"
                                        v-model="selectedAnswer[currentQuestionIndex]" :value="answer.value" />
                                    <label :for="answer.value">
                                        <div v-if="answer.image" class="image-container">
                                            <img :src="answer.image" alt="Icon" class="option-image" />
                                        </div>
                                        <div >
                                            <span class="option-label">{{ getOptionLabel(index) }} {{ answer.answer
                                                }}</span>
                                        </div>
                                    </label>
                                </li>

                            </ul>
                        </div>
                        <div v-if="childDetail.child_type === 'kids'" class="ans_box">
                            <!-- <ul class="donate-now">
                  <li
                      v-for="(answer, index) in questions[currentQuestionIndex].answers"
                      :key="answer.value"
                      :class="['ans_box_item', selectedAnswer[currentQuestionIndex] === answer.value ? 'active' : '']"
                    >
                      <input
                        type="radio"
                        :id="answer.value"
                        v-model="selectedAnswer[currentQuestionIndex]"
                        :value="answer.value"
                      />
                      <label :for="answer.value">
                        <div v-if="answer.image" class="image-container">
                          <img :src="answer.image" alt="Icon" class="option-image" />
                        </div>
                        <div :class="answer.image === null ? 'no-image':''" class="text-container">
                          <span class="option-label">{{ getOptionLabel(index) }} {{ answer.answer }}</span>
                        </div>
                      </label>
                    </li>
                </ul> -->
                            <ul :class="questions[currentQuestionIndex].image === null ? 'no-image' : ''"
                                class="donate-now" style="display: block;">
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
                <!-- <div v-if="selectedOptionValidator" style="color:#a71414;"><span>Please select both 'Most' and 'Least' options before proceeding.</span></div> -->
            </div>

            <!-- Next or Submit Button -->
            <div class="text-center text-md-end mt-4">
                <button v-if="currentQuestionIndex > 0" @click="previousQuestion"
                    class="commen_btn float-left">Back</button>
                <button v-if="currentQuestionIndex < questions.length - 1" @click="nextQuestion"
                    class="commen_btn">Next</button>
                <button v-else @click="submit_form" class="commen_btn">Submit</button>
            </div>
        </div>
        <LoadingSpinner v-else :visible="true" message="Loading questions..." />
        <LoadingSpinner v-if="submitting" :visible="true" message="Submitting Answers..." />

    </section>
</template>

<script>
import axios from 'axios';
import LoadingSpinner from '@/Components/LoadingSpinner.vue';

export default {
    name: "LearningAssessmentQuestions",
    components: {
        LoadingSpinner
    },
    props: {
        childId: String,
        childDetail: {
            type: Object,
            default: () => ({}), // Provide an empty object as the default value
        },
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
        getOptionLabel(index) {
            const labels = ["a)", "b)", "c)", "d)"];
            return labels[index] || "";
        },

        validateQuestion() {
            if (this.childDetail.child_type === 'teen') {
                // Validate if both 'Most' and 'Least' options are selected for the current question

            }

            return true;
        },

        keepOpen() {
            this.showInfoModal = true;
        },
        closeModal() {
            this.showInfoModal = false;
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
                //   const selectedHigh = this.selectedAnswer[this.currentQuestionIndex]?.high;
                //   const selectedLow = this.selectedAnswer[this.currentQuestionIndex]?.low;

                //   if (!selectedHigh || !selectedLow) {
                //     this.selectedOptionValidator = true;
                //     return;
                //   }

                //   // Store the selected answer for teens
                //   this.answers[this.currentQuestionIndex] = {
                //     question: this.questions[this.currentQuestionIndex].question,
                //     answer: {
                //       most: selectedHigh,
                //       least: selectedLow,
                //     },
                //   };
                this.answers[this.currentQuestionIndex] = {
                    question: this.questions[this.currentQuestionIndex].question,
                    answer: this.selectedAnswer[this.currentQuestionIndex],
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
        // submit_form() {
        //   this.submitting = true;
        //   window.location.href = "/dashboard";
        //   // axios
        //   //   .post("https://todai.blueskythinkingtesting.com/unify/api/assessment", {
        //   //     email: this.$page.props.auth.user.email,
        //   //     answers: this.answers,
        //   //   })
        //   //   .then((response) => {
        //   //     if (response.data.status === "Success") window.location.href = "/dashboard";
        //   //   });
        // },

        submit_form() {
            this.submitting = true;
            console.log(1)
            if (!this.validateQuestion()) {
                this.submitting = false;
                return;
            }
            // Construct the payload to match the required structure
            // const payload = {
            //   user_info: {
            //     email: this.$page.props.auth.user.email,
            //     //child_id: this.$page.props.auth.user.id,
            //     child_id:this.childDetail.id,
            //     type: this.childDetail.child_type // Static value as required
            //   },

            //   learn: this.questions.map((question, index) => ({
            //     question: index + 1,
            //     answer: this.selectedAnswer[index]
            //   }))
            // };

            axios.post(route('store.user-que-ans'), {
                email: this.$page.props.auth.user.email,
                child_id: this.childDetail.id,
                type: "learn",
                ansData: this.questions.map((question, index) => ({
                    question: question.id,
                    answer: this.selectedAnswer[index]
                }))
            })
                .then((response) => {
                    if (response.data.status === "Success") {
                        window.location.href = "/completed-disc-assessment/" + this.childDetail.id;
                    }
                })
                .catch((error) => {
                    console.error("There was an error!", error);
                })
                .finally(() => {
                    this.submitting = false;
                });

            // console.log("API Payload:", payload);
            // Post the data to the API
            // axios
            //   .post("https://todai.blueskythinkingtesting.com/unify-kids/api/assessment/result", payload)
            //   .then((response) => {
            //     // console.log(response);
            //     if (response.data.status === "Success") {
            //       // window.location.href = "/dashboard";
            //       axios
            //       .post(route('user-report.store'), {
            //         disc_report_url: response.data.data.disc_report_url ?? null,
            //         learn_report_url: response.data.data.learn_report_url ?? null,
            //       })
            //       window.location.href = "/welcome";
            //     }
            //   })
            //   .catch((error) => {
            //     console.error("There was an error!", error);
            //   })
            //   .finally(() => {
            //     this.submitting = false;
            //   });
        },
        fetchQuestions() {
            // Fetch questions from the API

            var userType = 'kids';

            if (this.childDetail.child_type === 'teen') {
                userType = 'teens';
            }

            var getQuestionUrlEndPoint = `https://todai.blueskythinkingtesting.com/unify-kids/api/assessment/learn?type=${userType}`;

            axios
                .get(getQuestionUrlEndPoint)
                .then((response) => {
                    console.log("API Response:", response.data); // Log the entire response

                    if (response.data && response.data.data) {
                        // Parse and format the questions into your desired format
                        this.questions = response.data.data.map(item => ({
                            question: item.question.en,
                            id: item.id,
                            info_text: item.info_text,
                            image: item.image,
                            answers: this.shuffle(item.options.map((option) => ({
                                answer: option.value.en,
                                image: option.image ? option.image : null,
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
                        // this.selectedAnswer.push({ high: null, low: null });
                        this.selectedAnswer.push(question.answers[0].value); // Select the first answer by default

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


.ans_box .donate-now {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  min-height: 200px;
}

.ans_box_item {
  position: relative;
  height: 162px;
  width: calc(50% - 10px); /* Adjust width to 50% minus gap for two-column layout */
  /* background-color: #f7f7f7;  */
  border-radius: 10px;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
}
.ans_box_item label {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 14px;
  height: 100%;
  /* background: transparent; */
}

.ans_box_item input[type="radio"] {
  display: none;
}

.icon-span {
    cursor: pointer;
}

.question-image {
    height: auto;
    width: 100%;
    object-fit: cover;
}
/* new css */
</style>
