<template>
    <div class="flex min-h-screen bg-gray-50 font-popins">
        <!-- Main Content -->
        <main class="flex-1 p-10 bg-white">
            <h2 class="text-center text-3xl font-black mb-2">
                Let’s Tailor Simplify for You
            </h2>
            <p class="text-lg mb-8">
                We’ve pre-filled some of your information from when you signed
                up. Please take a moment to check if everything is correct and
                make edits if needed.
            </p>
            <div
                class="h-1.5 w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] flex flex-row">
            </div>
            <form @submit.prevent="submitForm">
                <!-- Form Section -->
                <div class="space-y-8 pt-10">
                    <!-- User Information -->
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                        <!-- Text-Based Inputs (Takes 7 columns on larger screens) -->
                        <div class="md:col-span-8">
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold">First Name*</label>
                                    <input v-model="form.first_name" type="text" max="25"
                                        @input="validateField('first_name')"
                                        class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                        :class="{ 'input-error': errors.first_name }" />
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold">Last Name*</label>
                                    <input v-model="form.last_name" type="text" max="25"
                                        @input="validateField('last_name')"
                                        class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                        :class="{ 'input-error': errors.last_name }" />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                <div>
                                    <label class="block text-sm font-semibold">Email*</label>
                                    <input v-model="form.email" type="email" placeholder="Email" autocomplete="email"
                                        max="55" @input="validateField('email')"
                                        class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                        :class="{ 'input-error': errors.email }" />
                                </div>
                            </div>




                        </div>



                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-4">
                                <div class="flex flex-col">
                                    <label class="block text-sm font-semibold min-h-[40px] flex items-center">Country of
                                        Residence*</label>
                                    <select v-model="form.country_id" @change="validateField('country_id')"
                                        class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                        :class="{ 'input-error': errors.country_id }">
                                        <option value="" disabled>Select your country</option>
                                        <option v-for="country in countries" :key="country.id" :value="country.id">
                                            {{ country.name }}
                                        </option>
                                    </select>
                                </div>


                                <!-- City/town -->
                                <div class="flex flex-col">
                                    <label
                                        class="block text-sm font-semibold min-h-[40px] flex items-center">City/Town*</label>
                                        <select v-model="form.city" @change="validateField('city')"
                                        class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                        :class="{ 'input-error': errors.city }">
                                        <option value="" disabled>Select your city</option>
                                        <option v-for="cityData in cities" :key="cityData"
                                            :value="cityData">
                                            {{ cityData }}
                                        </option>
                                    </select>
                                </div>

                                <!-- Timezone -->
                                <div class="flex flex-col">
                                    <label
                                        class="block text-sm font-semibold min-h-[40px] flex items-center">Timezone*</label>
                                    <select v-model="form.timezone_id" @change="validateField('timezone_id')"
                                        class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                        :class="{ 'input-error': errors.timezone_id }">
                                        <option value="" disabled>Select your timezone</option>
                                        <option v-for="timezone in filteredTimezones" :key="timezone.id"
                                            :value="timezone.id">
                                            {{ timezone.identifier }} ({{ timezone.offset }})
                                        </option>
                                    </select>
                                </div>

                            </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div>
                            <label class="block text-sm font-semibold">Country Code*</label>
                            <select v-model="form.country_code" @change="validateField('country_code')"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{
                                    'input-error': errors.timezone_id,
                                }">
                                <option value="" disabled>
                                    Select your country code
                                </option>
                                <option v-for="countryCode in countryCodes"
                                    v-if="countryCode !== null && countryCode !== ''" :value="countryCode.country_code">
                                    {{ countryCode.country_code + ' (' + countryCode.name + ')' }}

                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold">Phone Number*</label>
                            <input v-model="form.phone_number" @input="validateField('phone_number')" type="text"
                                maxlength="13"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :class="{
                                    'input-error': errors.phone_number,
                                }" />
                            <!-- <p v-if="errors.Phone" class="text-red-500 text-sm">{{ errors.Phone }}</p> -->
                        </div>

                        <div>
                            <label class="block text-sm font-semibold">Date of Birth*</label>
                            <input v-model="form.date_of_birth" @input="validateField('date_of_birth')" type="date"
                                class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none"
                                :max="new Date().toISOString().split('T')[0]" placeholder="DD.MM.YYYY" :class="{
                                    'input-error': errors.date_of_birth,
                                }" />
                            <!-- <p v-if="errors.DateOfBirth" class="text-red-500 text-sm">{{ errors.DateOfBirth }}</p> -->
                        </div>
                    </div>
                    <div>
                        <p>
                           <b>Note:</b> Please make sure this number is the correct number you use for WhatsApp in order to use Simplify
                        </p>
                    </div>

                    <!-- Partner Information -->
                    <div
                        class="h-1.5 w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex flex-row">
                    </div>
                    <div class="">
                        <!-- <h3 class="text-center text-xl font-bold text-[#1D355D] mb-4">
              Want to Add Your Partner?
            </h3> -->
                        <h2 class="text-center text-3xl font-black text-[#1D355D] mb-4">
                            Want to Add Your Partner?
                        </h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div>
                                <label class="block text-sm font-semibold">Partner First Name</label>
                                <input v-model="form.partner_first_name" type="text" max="25"
                                    class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none" />
                            </div>
                            <div>
                                <label class="block text-sm font-semibold">Partner Last Name</label>
                                <input v-model="form.partner_last_name" type="text" max="25"
                                    class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none" />
                            </div>

                            <div>
                                <label class="block text-sm font-semibold">Partner Email</label>
                                <input v-model="form.partner_email" type="email" max="55"
                                    class="mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-[#FC5C7D] focus:outline-none" />
                            </div>
                        </div>
                        <!-- <p class=" mt-4 text-sm">
              Your partner will only receive reminders or updates if you explicitly mention them when sending an email to Simplify (e.g., “Add Steve to this event”). Otherwise, all updates and notifications will default to the primary email address.
            </p> -->
                        <p class="mt-4 text-sm">
                            To ensure your partner receives calendar invites
                            from Simplify, make sure to CC them in the emails
                            you send. If they are not CC’d, all reminders and
                            updates will default to the primary email address.
                        </p>
                        <div
                            class="h-1.5 w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] flex flex-row">
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="mt-8 flex justify-between">
                    <Link @click="handleLinkClick(route('simplify.index'))"
                        class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400">
                    Back
                    </Link>
                    <!-- <Link class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400"  href='/simplify-family-personalization' >Next</Link> -->
                    <button type="submit"
                        class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400">
                        Next
                    </button>
                </div>
            </form>
        </main>
    </div>
</template>

<script>
import SimplifyLayout from "@/Layouts/SimplifyLayout.vue";
import { Link } from "@inertiajs/vue3";
import axios from "axios";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputField from "@/Components/InputField.vue";
import { onMounted } from "vue";
import countriesCities from "@/Json/country-cities.json";

export default {
    name: "FillProfileSimplify",
    layout: SimplifyLayout,
    components: { Link },
    mounted() {
        console.log(this.countries[this.form.country_id - 1].country_code);
        // this.countryCodes = this.countries.map((data) => data.country_code).filter((code) => code !== null && code !== '').sort();

        this.getTimezonesByCountry(this.countries[this.form.country_id - 1].code);
    },
    computed: {
        cities() {
            this.form.country_id;
            const countryData = this.countries.find((country) => country.id === this.form.country_id)
            const cities =countriesCities[countryData.name];
            return cities;
        }
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
            filteredTimezones: [],
        };
    },
    props: {
        countries: Object,
        timezones: Object,
        user: Object,
        countryCodes: Array,

        // parentDetail: {
        //   type: Object,
        //   required: true,
        // },
        parentDetail: {
            type: Object,
            default: () => ({}), // Provide an empty object as the default value
        },
    },
    methods: {
        initializeForm() {
            return {
                first_name:
                    this.parentDetail?.first_name || this.user?.name || "",
                last_name:
                    this.parentDetail?.last_name || this.user?.last_name || "",
                email: this.parentDetail?.email || this.user?.email || "",
                country_id:
                    this.parentDetail?.country_id ||
                    this.user?.country_id ||
                    "",
                timezone_id:
                    this.parentDetail?.timezone_id ||
                    this.user?.timezone_id ||
                    "",
                phone_number:
                    this.parentDetail?.phone_number ||
                    this.user?.phone_number ||
                    "",
                date_of_birth:
                    this.parentDetail?.date_of_birth ||
                    this.user?.birthday ||
                    "",
                partner_first_name: this.parentDetail?.partner_first_name || "",
                partner_last_name: this.parentDetail?.partner_last_name || "",
                partner_email: this.parentDetail?.partner_email || "",
                country_code: this.parentDetail?.country_code || "",
                city: this.parentDetail?.city ?? "",
            };
        },

        handleLinkClick(path) {
            this.currentPath = "/" + path.split("/").pop(); // Update the current path on click
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
                case "first_name":
                    if (!this.form.first_name) {
                        this.errors.first_name =
                            "Please enter your first name.";
                    }
                    break;

                case "last_name":
                    if (!this.form.last_name) {
                        this.errors.last_name = "Please enter your last name.";
                    }
                    break;

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
                    this.getTimezonesByCountry(this.countries[this.form.country_id - 1].code);

                    break;

                case "timezone_id":
                    if (!this.form.timezone_id) {
                        this.errors.timezone_id = "Please select a timezone.";
                    }
                    break;

                case "phone_number":
                    if (!this.form.phone_number) {
                        this.form.phone_number = this.form.phone_number.replace(/[^+\d]/g, "");
                        this.errors.phone_number =
                            "Please enter your phone number.";
                    } else if (/^\d{14}$/.test(this.form.phone_number)) {
                        this.errors.phone_number =
                            "Please enter a valid UAE phone number (+971 followed by 9 digits).";
                    }
                    break;

                case "date_of_birth":
                    if (!this.form.date_of_birth) {
                        this.errors.date_of_birth =
                            "Please enter your date of birth.";
                    }
                    break;

                case "city":
                    if (!this.form.city) {
                        this.errors.city = "Please enter your city.";
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
                if (this.parentDetail?.id) {
                    response = await axios.put(
                        route(
                            "simplify.updateParentDetail",
                            this.parentDetail.id
                        ),
                        this.form
                    );
                } else {
                    response = await axios.post(
                        route("simplify.storeParentDetail"),
                        this.form
                    );
                }
                window.location.href = response.data.redirect_url;
            } catch (error) {
                if (error.response?.status === 422) {
                    this.errors = error.response.data.errors;
                } else {
                    alert("Something went wrong. Please try again.");
                }
            }
        },

        async getTimezonesByCountry(country_code) {
            axios.get(route('simplify.get-timezones'), {
                params: {
                    country_code: country_code
                }
            }).then(response => {
                this.filteredTimezones = response.data.timezones;
                console.log(response);
                console.log(this.filteredTimezones);
            });
        }
    },


};



const validateEmail = () => {
    // Simple email validation regex
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Check if email is valid
    if (emailPattern.test(this.form.email)) {
        // Clear error message if valid
        this.errors.email = null;
    } else {
        // Set error message if invalid
        this.errors.email = "Please enter a valid email address";
    }
};
</script>

<style scoped>
.text-red-500 {
    color: #f56565;
}

.font-popins {
    font-family: "Poppins";
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
