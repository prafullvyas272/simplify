<template>
     <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
    <div class="w-1/6 img-logo">
        <Link :href="route('profile.report')">
            <img src="/images/simplify-images/simplify-latest.png" class="max-h-20" alt="Logo">
        </Link>
    </div>
</div>

    <section
        class="intro-section"
        :class="childDetail.child_type === 'kids' ? 'mt-3' : 'mt-5'"
    >
        <div class="container" style="">
            <div
                v-if="childDetail.child_type === 'kids'"
                class="row kids align-items-center mt-5"
            >
                <!-- Left Side Images -->
                <div class="col-lg-3 text-center">
                    <div class="character-img mb-3">
                        <img
                            src="/images/kids-girl.jpg"
                            alt="Girl 1"
                            class="img-fluid"
                        />
                    </div>
                    <div class="character-img mb-3">
                        <img
                            src="/images/kids-boy.jpg"
                            alt="Boy 1"
                            class="img-fluid"
                        />
                    </div>
                    <div class="character-img mb-3">
                        <img
                            src="/images/girl2.png"
                            alt="Girl 2"
                            class="img-fluid"
                        />
                    </div>
                    <div class="character-img">
                        <img
                            src="/images/boy2.png"
                            alt="Boy 2"
                            class="img-fluid"
                        />
                    </div>
                </div>

                <!-- Text Content -->
                <div class="col-lg-9 text-lg-left">
                    <p class="welcome-heading mt-5">Welcome!</p>
                    <p class="intro-text">
                        Are you ready to discover how you learn best?
                    </p>
                    <p class="intro-text">
                        In this fun assesment, you'll explore different ways
                        that people learn and find out what works best for you.
                        As you go through the questions, think about how
                        <strong>you</strong> like to
                        <strong>study, listen, or do activities.</strong>
                    </p>
                    <p class="intro-text">
                        Each question will ask you to pick what
                        <strong>feels most like you</strong> when you're
                        learning something new or doing schoolwork. By the end,
                        you'll have a better idea of whether you learn best by
                        seeing, hearing, or doing.
                    </p>
                    <p class="intro-text">
                        Remember, there are
                        <strong>no right or wrong answers</strong> – just choose
                        what feels right for you. This is all about helping you
                        learn in a way that makes you happy and successful.
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <p class="intro-text">
                                <strong
                                    >Let’s get started and have some
                                    fun!<br> By the end, you’ll have a better idea of how you learn best.</strong
                                >
                            </p>

                        </div>
                        <div class="col-6">
                            <div class="text-center text-md-end">
                                <!-- <a :href="route('disc.assessments.create')" class="commen_btn">Let's Begin!</a> -->
                                <Link
                                    :href="
                                        route(
                                            'learning.assessments.create',
                                            this.childId
                                        )
                                    "
                                    class="commen_btn"
                                >
                                    Let's Begin!
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                v-if="childDetail.child_type === 'teen'"
                class="teens align-items-center mt-4"
            >
                <!-- Text Content -->

                <div class="flex">
                    <div class="col-lg-12 text-lg-right pr-5 mt-4">
                        <h1 class="main-heading tex-2xl py-1">
                            Welcome to Your Learning Styles Assessment!
                        </h1>
                        <p class="text-lg" style="font-size: 19px;">
                            This assessment is designed to help you discover how
                            you learn best—whether you’re reading, watching,
                            doing, or listening. Understanding your unique
                            learning style can make school, studying, and even
                            life outside the classroom easier and more
                            enjoyable.
                        </p>


                        <!-- <p class="intro-text"><strong>Find a quiet place, focus, and let’s get started!</strong></p> -->
                    </div>
                    <div class="col-lg-5 mt-4">

                    </div>

                </div>
                <div class="flex">
                    <div class="col-lg-7 text-lg-right pr-5 mt-4">

                        <!-- <h3 class="main-heading">
                            <strong>How It Works:</strong>
                        </h3> -->
                        <p class="text-lg">
                            For each question, you’ll see a few options. <br />
                            Your task is simple: choose one option that is Most
                            Like You and one option that is Least Like You.<br /><br />
                            There are no right or wrong answers—this is about
                            YOU.
                        </p>
                        <!-- <h3 class="main-heading">
                            <strong>Be Honest:</strong>
                        </h3> -->
                        <p class="text-lg">
                            The more honest you are, the more accurate your
                            results will be. <br />
                            Don’t overthink it—just go with what feels most
                            natural or true for you. This isn’t a test. It’s a
                            chance to learn more about yourself and how to make
                            learning work for YOU.
                        </p>
                        <p class="text-lg">
                            By the end, you’ll gain insights into your learning
                            style, which can help you study smarter, not harder.
                            Whether at school, at home, or during activities,
                            knowing how you learn best can make a huge
                            difference.
                        </p>
                        <!-- <p class="intro-text"><strong>Find a quiet place, focus, and let’s get started!</strong></p> -->
                    </div>
                    <div class="col-lg-5 mt-4">
                        <img
                            class="getty-image"
                            src="/images/getty-images.jpg"
                        />
                    </div>

                </div>
            </div>
        </div>
        <section v-if="childDetail.child_type === 'teen'">
            <div class="container">
                <div class="bg_brd">
                    <h2>Find a Quiet Place</h2>
                    <p>
                        Before we begin, make sure you are in a quiet place with
                        no distractions. This will help you focus and think
                        about each question carefully.
                    </p>
                </div>
            </div>
        </section>
    </section>

    <!-- Button Section -->
    <section v-if="childDetail.child_type === 'teen'">
        <div class="container">
            <div class="text-center text-md-end">
                <!-- <a :href="route('disc.assessments.create')" class="commen_btn">Let's Begin!</a> -->
                <Link
                    :href="route('learning.assessments.create', this.childId)"
                    class="commen_btn"
                >
                    Let's Begin!
                </Link>
            </div>
        </div>
    </section>
</template>

<script>
import NavBar from "@/Components/Navigation/NavBar.vue";
import { Link } from "@inertiajs/vue3";
export default {
    props: {
        childId: String,
        childDetail: {
            type: Object,
            default: () => ({}), // Provide an empty object as the default value
        },
    },
    name: "DiscAssessmentBefore",
    components: { Link, NavBar },
};
</script>

<style scoped>
/* General Body and Typography */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 20px;
}

h1.main-heading {
    font-size: 2.5rem;
    font-weight: 900;
    font-style: "Poppins";
    color: #091532;
    margin-bottom: 20px;
}

p.welcome-heading {
    font-size: 2.5rem !important;
    font-weight: 900;
    font-style: "Poppins";
    color: #091532;
    margin-bottom: 20px;
}

p.intro-text {
    font-size: 1rem;
    color: rgb(9 21 50);
    line-height: 1.6;
    margin-bottom: 15px;
}

p.teen-intro-text {
    font-size: 13px;
    color: rgb(9 21 50);
    line-height: 1.6;
    margin-bottom: 15px;
}

p.intro-text strong {
    color: rgb(9 21 50);
}

/* Images */
.character-img img {
    border-radius: 10%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Button */
.btn-custom {
    background: linear-gradient(to right, #fbd3e9, #bb377d);
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 1.1rem;
    border-radius: 30px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: opacity 0.3s ease;
}

.btn-custom:hover {
    opacity: 0.9;
}

.col-lg-9.text-lg-left p {
    padding-bottom: 30px;
    font-size: larger;
    margin-left: -80px;
}

.teens {
    margin-top: -40px;
}

.teens .getty-image {
    width: 500px;
    max-width: fit-content;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .intro-text {
        font-size: 0.9rem;
    }

    .character-img img {
        width: 120px;
        height: 120px;
    }
}
</style>
