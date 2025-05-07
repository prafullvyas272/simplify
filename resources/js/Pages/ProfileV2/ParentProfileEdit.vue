<template>
    <div class="min-h-screen flex flex-col items-center py-10 font-poppins">
        <!-- Heading -->
        <div class="w-full">
            <h1 class="text-center text-3xl font-bold text-gray-800">
                Edit Profile
            </h1>
        </div>

        <!-- Profile Section -->
        <div class="flex flex-col items-start space-y-6">
            <!-- Two-column layout -->
            <form @submit.prevent="submitForm">
                <!-- Form Section -->
                <div class="space-y-8 pt-5">
                    <!-- User Information -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div>
                            <label class="block text-sm font-semibold"
                                >First Name*</label
                            >
                            <input
                                v-model="form.first_name"
                                type="text"
                                max="25"
                                @input="validateField('first_name')"
                                class="mt-2 border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{ 'input-error': errors.first_name }"
                            />
                            <!-- <p v-if="errors.FirstName" class="text-red-500 text-sm">{{ errors.FirstName }}</p> -->
                        </div>

                        <!-- <div>
              <label class="block text-sm font-semibold ">Last Name*</label>
              <input
                v-model="form.last_name"
                @input="validateField('last_name')"
                type="text"
                max="25"
                class="mt-2 border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                :class="{'input-error': errors.last_name}"
              />

            </div> -->
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-semibold"
                                    >Primary Email Address for Calendar
                                    Invitations*</label
                                >
                                <input
                                    v-model="form.email"
                                    @input="validateField('email')"
                                    max="55"
                                    placeholder="Email"
                                    type="email"
                                    autocomplete="email"
                                    class="mt-2 w-96 border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                    :class="{ 'input-error': errors.email }"
                                />
                                <!-- <p v-if="errors.Email" class="text-red-500 text-sm">{{ errors.Email }}</p> -->
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div>
                                <label class="block text-sm font-semibold"
                                    >Country of Residence*</label
                                >
                                <select
                                    v-model="form.country_id"
                                    @change="validateField('country_id')"
                                    class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                    :class="{
                                        'input-error': errors.country_id,
                                    }"
                                >
                                    <option value="" disabled>
                                        Select your country
                                    </option>
                                    <option
                                        v-for="country in countries"
                                        :key="country.id"
                                        :value="country.id"
                                    >
                                        {{ country.name }}
                                    </option>
                                </select>

                                <!-- Display error message if any -->
                                <!-- <p v-if="errors.Country" class="text-red-500 text-sm">
                  {{ errors.Country }}
                </p> -->
                            </div>

                            <div>
                                <label class="block text-sm font-semibold"
                                    >Timezone*</label
                                >
                                <!-- <input
                v-model="form.timezone_id"
                @input="this.validateData"
                type="text"
                class="mt-2 border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                :class="{'input-error': errors.Timezone}"
              /> -->

                                <select
                                    v-model="form.timezone_id"
                                    @change="validateField('timezone_id')"
                                    class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                    :class="{
                                        'input-error': errors.timezone_id,
                                    }"
                                >
                                    <option value="" disabled>
                                        Select your timezone
                                    </option>
                                    <option
                                        v-for="timezone in timezones"
                                        :key="timezone.id"
                                        :value="timezone.id"
                                    >
                                        {{ timezone.identifier }} ({{
                                            timezone.offset
                                        }})
                                    </option>
                                </select>
                                <!-- <p v-if="errors.Timezone" class="text-red-500 text-sm">{{ errors.Timezone }}</p> -->
                            </div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div>
                                <label class="block text-sm font-semibold"
                                    >Phone Number*</label
                                >
                                <input
                                    v-model="form.phone_number"
                                    @input="validateField('phone_number')"
                                    type="text"
                                    max="10"
                                    class="mt-2 border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                    :class="{
                                        'input-error': errors.phone_number,
                                    }"
                                />
                                <!-- <p v-if="errors.Phone" class="text-red-500 text-sm">{{ errors.Phone }}</p> -->
                            </div>

                            <div>
                                <label class="block text-sm font-semibold"
                                    >Date of Birth*</label
                                >
                                <input
                                    v-model="form.date_of_birth"
                                    @input="validateField('date_of_birth')"
                                    type="date"
                                    class="mt-2 border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                    placeholder="DD.MM.YYYY"
                                    :max="
                                        new Date().toISOString().split('T')[0]
                                    "
                                    :class="{
                                        'input-error': errors.date_of_birth,
                                    }"
                                />
                                <!-- <p v-if="errors.DateOfBirth" class="text-red-500 text-sm">{{ errors.DateOfBirth }}</p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="mt-8 flex justify-between">
                    <!-- <Link class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400"  href='/simplify-family-personalization' >Next</Link> -->
                    <button
                        type="submit"
                        class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400"
                    >
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import ReportLayout from "@/Layouts/ReportLayout.vue";
import { Link } from "@inertiajs/vue3";
export default {
    name: "WelcomeReport",
    layout: ReportLayout,
    components: { Link },
    props: {
        user: Object,
        countries: Object,
        timezones: Object,
    },
    data() {
        return {
            // form: {
            //   first_name: this.parentDetail.first_name || '',
            //   last_name: this.parentDetail.last_name || '',
            //   email: this.parentDetail.email || '',
            //   country_id: this.parentDetail.country_id || '',
            //   timezone_id: this.parentDetail.timezone_id || '',
            //   phone_number: this.parentDetail.phone_number || '',
            //   date_of_birth: this.parentDetail.date_of_birth || '',
            //   partner_first_name: this.parentDetail.partner_first_name || '',
            //   partner_last_name: this.parentDetail.partner_last_name || '',
            //   partner_email: this.parentDetail.partner_email || '',
            // },
            form: this.initializeForm(),
            errors: {},
        };
    },
    methods: {
        initializeForm() {
            return {
                first_name: this.user?.name || "",
                // last_name: this.parentDetail?.last_name || this.user?.last_name || '',
                email: this.user?.email || "",
                country_id: this.user?.country_id || "",
                timezone_id: this.user?.timezone_id || "",
                phone_number: this.user?.phone_number || "",
                date_of_birth: this.user?.birthday || "",
            };
        },

        validateData() {
            // Reset errors object before validation
            this.errors = {};
            // Validate each field in the form
            Object.keys(this.form).forEach((field) =>
                this.validateField(field)
            );

            // Check if there are any errors
            console.log(this.errors);
            // Debugging: See what errors exist
            return Object.keys(this.errors).length === 0;
        },

        validateField(field) {
            // Clear the specific field error
            delete this.errors[field];

            // Perform validation logic based on field
            switch (field) {
                case "first_name":
                    if (!this.form.first_name) {
                        this.errors.first_name =
                            "Please enter your first name.";
                    }
                    break;

                // case "last_name":
                // if (!this.form.last_name) {
                //     this.errors.last_name = "Please enter your last name.";
                // }
                // break;

                case "email":
                    if (!this.form.email) {
                        this.errors.email = "Please enter your email.";
                    } else if (
                        !/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(
                            this.form.email
                        )
                    ) {
                        this.errors.email =
                            "Please enter a valid email address.";
                    }
                    break;

                case "country_id":
                    if (!this.form.country_id) {
                        this.errors.country_id = "Please select a country.";
                    }
                    break;

                case "timezone_id":
                    if (!this.form.timezone_id) {
                        this.errors.timezone_id = "Please select a timezone.";
                    }
                    break;

                case "phone_number":
                    if (!this.form.phone_number) {
                        this.errors.phone_number =
                            "Please enter your phone number.";
                    } else if (!/^\d{10}$/.test(this.form.phone_number)) {
                        this.errors.phone_number =
                            "Please enter a valid 10-digit phone number.";
                    }
                    break;

                case "date_of_birth":
                    if (!this.form.date_of_birth) {
                        this.errors.date_of_birth =
                            "Please enter your date of birth.";
                    }
                    break;

                default:
                    break;
            }
        },

        async submitForm() {
            if (!this.validateData()) return;
            try {
                let response;
                response = await axios.put(
                    route("profile.update", this.user.id),
                    this.form
                );

                window.location.href = response.data.redirect_url;
            } catch (error) {
                if (error.response?.status === 422) {
                    this.errors = error.response.data.errors;
                } else {
                    alert("Something went wrong. Please try again.");
                }
            }
        },
    },
};
</script>

<style scoped>
.font-poppins {
    font-family: "Poppins", sans-serif;
}

.border-black {
    border: 2px solid #000000 !important;
    background-color: lightgray;
}
p {
    color: #000000;
}
.input-error {
    border: 2px solid red !important;
}

@media screen and (min-width: 1920px) {
    .paragraph {
        font-size: larger;
        color: #000000;
    }
    .heading {
        font-size: xxx-large;
    }
}
</style>
