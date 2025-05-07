<template>
    <div class="flex min-h-screen bg-gray-50 font-popins">
        <!-- Main Content -->
        <main class="flex-1 p-10 bg-white">
            <h2 class="text-center text-3xl font-bold-extra mb-2">
                Add Profile
            </h2>
            <form @submit.prevent="submitForm">
                <!-- Form Section -->
                <div class="space-y-8 pt-10">
                    <!-- Child Information -->
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6"
                    >
                        <div>
                            <label class="block text-sm font-semibold"
                                >Child’s First Name*</label
                            >
                            <input
                                type="text"
                                v-model="form.child_name"
                                @input="validateField('child_name')"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.child_name }"
                            />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold"
                                >Relationship to Child*</label
                            >
                            <select
                                v-model="form.relationship_to_child"
                                @change="validateField('relationship_to_child')"
                                :disabled="form.relationship_to_child != null && relationshipType != undefined"

                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{
                                    'input-error': errors.relationship_to_child,
                                     'bg-gray-200': form.relationship_to_child != null && relationshipType != undefined
                                }"
                            >
                                <option value="" disabled>
                                    Select your relationship to child
                                </option>
                                <option
                                    v-for="option in relationshipToChildOptions"
                                    :key="option.value"
                                    :value="option.value"
                                >
                                    {{ option.label }}
                                </option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold"
                                >Child Type*</label
                            >
                            <select
                                v-model="form.child_type"
                                @change="validateField('child_type')"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.child_type }"
                            >
                                <option value="" disabled>
                                    Select your child type
                                </option>
                                <option
                                    v-for="option in childType"
                                    :key="option.value"
                                    :value="option.value"
                                >
                                    {{ option.label }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold"
                                >Date of Birth*</label
                            >
                            <input
                                type="date"
                                v-model="form.date_of_birth"
                                @input="validateField('date_of_birth')"
                                :max="new Date().toISOString().split('T')[0]"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.date_of_birth }"
                            />
                        </div>
                    </div>

                    <!-- Additional Fields -->
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6"
                    >

                        <div v-if="user.country_id == 247">
                            <label class="block text-sm font-semibold"
                                >School Name</label
                            >
                            <select
                                v-model="form.school_id"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.school_id }"
                            >
                                <option value="" disabled>
                                    Select your school
                                </option>
                                <option
                                    v-for="school in schools"
                                    :key="school.id"
                                    :value="school.id"
                                >
                                    {{ school.name }}
                                </option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold"
                                >Grade</label
                            >

                            <input
                                type="text"
                                v-model="form.grade"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.grade }"
                            />
                        </div>



                        <div>
                            <label class="block text-sm font-semibold"
                                >Gender*</label
                            >
                            <select
                                v-model="form.gender"
                                @change="validateField('gender')"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.gender }"
                            >
                                <option value="" disabled>
                                    Select your child's gender
                                </option>
                                <option
                                    v-for="option in genderOptions"
                                    :key="option.value"
                                    :value="option.value"
                                >
                                    {{ option.label }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <!-- <div v-if="user.simplify_status">
                            <label class="block text-sm font-semibold"
                                >Learning Style</label
                            >
                            <p class="text-sm mb-1">
                                If you don’t know your child’s learning style, take the Unify assessment
                            </p>
                            <select
                                v-model="form.style_type"
                                @change="validateField('style_type')"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.style_type }"
                            >
                                <option value="" disabled>
                                    Select learning style
                                </option>
                                <option
                                    v-for="option in learningStyles"
                                    :key="option.value"
                                    :value="option.value"
                                >
                                    {{ option.label }}
                                </option>
                            </select>
                        </div> -->
                    <!-- Key Interests -->
                    <div>
                        <label class="block text-sm font-semibold"
                            >Key Interests*</label
                        >
                        <p class="text-sm mb-1">
                            Enter hobbies, favorite subjects, or extracurricular
                            activities. Press Enter to add each item as a tag.
                        </p>
                        <div
                            class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm flex flex-wrap focus-within:ring-2 focus-within:ring-[#FC5C7D]"
                        >
                            <span
                                v-for="(tag, index) in form.key_interests"
                                :key="'key_interest_' + index"
                                class="bg-[#FC5C7D] text-white rounded-full px-3 py-1 text-sm mr-2 mb-2 flex items-center"
                            >
                                {{ tag }}
                                <button
                                    @click="removeTag('key_interests', index)"
                                    class="ml-2 text-white text-xs focus:outline-none"
                                >
                                    ✕
                                </button>
                            </span>
                            <input
                                type="text"
                                v-model="newKeyInterest"
                                @keydown.enter.prevent="
                                    addTag('key_interests', newKeyInterest)
                                "
                                class="flex-1 focus:outline-none text-sm"
                                placeholder="Type and press Enter"
                            />
                        </div>
                    </div>

                    <!-- Learning Goals -->
                    <div class="mt-8">
                        <label class="block text-sm font-semibold"
                            >Learning Goals*</label
                        >
                        <p class="text-sm mb-1">
                            What would you like your child to focus on? Press
                            Enter to add each goal as a tag.
                        </p>
                        <div
                            class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm flex flex-wrap focus-within:ring-2 focus-within:ring-[#FC5C7D]"
                        >
                            <span
                                v-for="(tag, index) in form.learning_goals"
                                :key="'learning_goal_' + index"
                                class="bg-[#FC5C7D] text-white rounded-full px-3 py-1 text-sm mr-2 mb-2 flex items-center"
                            >
                                {{ tag }}
                                <button
                                    @click="removeTag('learning_goals', index)"
                                    class="ml-2 text-white text-xs focus:outline-none"
                                >
                                    ✕
                                </button>
                            </span>
                            <input
                                type="text"
                                v-model="newLearningGoal"
                                @keydown.enter.prevent="
                                    addTag('learning_goals', newLearningGoal)
                                "
                                class="flex-1 focus:outline-none text-sm"
                                placeholder="Type and press Enter"
                            />
                        </div>
                    </div>

                    <!-- Gradient Separator -->
                    <div
                        class="h-1.5 w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]"
                    ></div>
                </div>

                <!-- Navigation Buttons -->
                <div class="mt-8 flex justify-between">
                    <button
                        type="submit"
                        class="commen_btn bg-[#FC5C7D] text-white rounded-lg shadow-sm font-semibold hover:bg-[#E94563]"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </div>
</template>

<script>
import ReportLayout from "@/Layouts/ReportLayout.vue";
import { Link } from "@inertiajs/vue3";
export default {
    name: "AddAnotherChild",
    layout: ReportLayout,
    components: { Link },
    data() {
        return {
            newKeyInterest: "",
            newLearningGoal: "",
            form: this.initializeForm(),
            errors: {},
        };
    },
    props: {
        schools: Array,
        user: Object,
        genderOptions: {
            type: Array,
            default: () => [
                { value: "male", label: "Male" },
                { value: "female", label: "Female" },
                { value: "other", label: "Other" },
            ],
        },
        childType: {
            type: Array,
            default: () => [
                { value: "kids", label: "Kids" },
                { value: "teen", label: "Teen" },
            ],
        },
        relationshipToChildOptions: {
            type: Array,
            default: () => [
                { value: "father", label: "Father" },
                { value: "mother", label: "Mother" },
                { value: "guardian", label: "Guardian" },
                { value: "relative", label: "Relative" },
            ],
        },
        learningStyles: {
            type: Array,
            default: () => [
                { value: "Visual", label: "Visual" },
                { value: "Visual/Auditory", label: "Visual/Auditory" },
                { value: "Visual/Kinesthetic", label: "Visual/Kinesthetic" },
                {
                    value: "Visual/Reading/Writing",
                    label: "Visual/Reading/Writing",
                },

                {
                    value: "Auditory/Kinesthetic",
                    label: "Auditory/Kinesthetic",
                },
                {
                    value: "Auditory/Reading/Writing",
                    label: "Auditory/Reading/Writing",
                },
                { value: "Auditory/Visual", label: "Auditory/Visual" },
                { value: "Auditory", label: "Auditory" },

                {
                    value: "Kinesthetic/Auditory",
                    label: "Kinesthetic/Auditory",
                },
                {
                    value: "Kinesthetic/Reading/Writing",
                    label: "Kinesthetic/Reading/Writing",
                },
                { value: "Kinesthetic/Visual", label: "Kinesthetic/Visual" },
                { value: "Kinesthetic", label: "Kinesthetic" },

                {
                    value: "Reading/Writing/Auditory",
                    label: "Reading/Writing/Auditory",
                },
                {
                    value: "Reading/Writing/Kinesthetic",
                    label: "Reading/Writing/Kinesthetic",
                },
                {
                    value: "Reading/Writing/Visual",
                    label: "Reading/Writing/Visual",
                },
                { value: "Reading/Writing", label: "Reading/Writing" },
            ],
        },
        relationshipType: String,
    },
    methods: {
        navigateBack() {
            this.$router.push("/profile-report"); // Navigates to the specified route
        },

        initializeForm() {
            return {
                child_name: "",
                relationship_to_child: "",
                date_of_birth: "",
                school_id: "",
                other_school: "",
                grade: "",
                key_interests: "",
                learning_goals: "",
                gender: "",
                key_interests: [],
                learning_goals: [],
                style_type: "",
            };
        },

        addTag(field, value) {
            if (!value.trim() || this.form[field].includes(value.trim()))
                return;
            this.form[field].push(value.trim());
            if (field === "key_interests") this.newKeyInterest = "";
            else if (field === "learning_goals") this.newLearningGoal = "";
        },
        removeTag(field, index) {
            this.form[field].splice(index, 1);
        },

        validateData() {
            // Reset errors object before validation
            this.errors = {};
            // Validate each field in the form
            Object.keys(this.form).forEach((field) =>
                this.validateField(field)
            );

            // Check if there are any errors
            //console.log(this.errors);
            // Debugging: See what errors exist
            return Object.keys(this.errors).length === 0;
        },

        validateField(field) {
            // Clear the specific field error
            delete this.errors[field];
            // Perform validation logic based on field
            switch (field) {
                case "child_name":
                    if (!this.form.child_name) {
                        this.errors.child_name =
                            "Please enter your first name.";
                    }
                    break;

                // case "child_last_name":
                //   if (!this.form.child_last_name) {
                //     this.errors.child_last_name = "Please enter your last name.";
                //   }
                //   break;

                case "relationship_to_child":
                    if (!this.form.relationship_to_child) {
                        this.errors.relationship_to_child =
                            "Please select a relationship to child.";
                    }
                    break;

                case "child_type":
                    if (!this.form.child_type) {
                        this.errors.child_type = "Please select a child type.";
                    }
                    break;

                case "date_of_birth":
                    if (!this.form.date_of_birth) {
                        this.errors.date_of_birth =
                            "Please enter your date of birth.";
                    }
                    break;

                case "gender":
                    if (!this.form.gender) {
                        this.errors.gender = "Please select a gender.";
                    }
                    break;

                // case "school_name":
                //   if (!this.form.school_name) {
                //     this.errors.school_name = "Please select a school name.";
                //   }
                //   break;

                default:
                    break;
            }
        },

        async submitForm() {
            // Validate form data
            if (!this.validateData()) return;

            const submissionData = {
                ...this.form,
                key_interests: this.form.key_interests.join(","),
                learning_goals: this.form.learning_goals.join(","),
            };

            try {
                let response;
                // Create new record
                response = await axios.post(
                    route("store.child.detail"),
                    submissionData
                );
                window.location.href = response.data.redirect_url;
            } catch (error) {
                if (error.response && error.response.status === 422) {
                    this.errors = error.response.data.errors; // Display Laravel validation errors
                } else {
                    console.log(error);
                    alert("Before you can proceed with taking an assessment, please finish the Simplify sign up. Thank you!");
                }
            }
        },
    },
    mounted() {
        this.form.relationship_to_child = this.relationshipType;
    }
};
</script>

<style scoped>
.font-popins {
    font-family: "Poppins", sans-serif;
}

.text-red-500 {
    color: #f56565;
}

.input-error {
    border: 2px solid red !important;
}

.error-text {
    color: red;
}

.selected-border {
    border: 2px solid lightgray !important;
}
</style>
