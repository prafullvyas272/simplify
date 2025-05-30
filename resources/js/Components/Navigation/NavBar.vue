<template>
    <Toast />
    <div class=" fixed top-0 left-0 right-0 z-50">
        <nav class=" w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]">
            <div class="mx-auto max-w-8xl md:px-6 lg:px-8">
                <div class="pr-5 relative flex h-16 items-center justify-between">

                    <div class="logo-class flex shrink-0 items-center">
                        <img data-v-3de05c74="" src="/images/simplify-images/simplify-latest.png" class="max-h-20"
                            alt="" />

                    </div>
                    <div v-if="!isMdOrLarger">
                        <a v-if="hasActiveSubscription && accessData?.simplify === '1'" href="#"
                            class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue">
                            <DropdownMenu>
                                <DropdownMenuTrigger>
                                    <div class="rounded-full" style="margin-right: 25px;">Simplify</div>
                                </DropdownMenuTrigger>
                                <DropdownMenuContent>
                                    <DropdownMenuItem>
                                        <Link :href="route('simplify.index')">Set up Simplify</Link>
                                    </DropdownMenuItem>
                                    <DropdownMenuItem>
                                        <Link :href="route('profile.child.addmore')">
                                        Add Kid</Link>
                                    </DropdownMenuItem>
                                </DropdownMenuContent>
                            </DropdownMenu>
                        </a>

                    </div>

                    <div
                        class="hidden md:ml-6 md:flex md:items-center flex flex-1 items-center justify-center md:items-stretch md:justify-center">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

                            <a v-if="hasActiveSubscription && accessData?.my_report === '1'" href="#"
                                class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue">
                                <DropdownMenu>
                                    <DropdownMenuTrigger>My Reports</DropdownMenuTrigger>

                                    <DropdownMenuContent className="w-56">
                                        <DropdownMenuGroup>
                                            <!-- First Term Report -->
                                            <DropdownMenuSub>
                                                <DropdownMenuSubTrigger>
                                                    <span>First Term Report</span>
                                                </DropdownMenuSubTrigger>
                                                <DropdownMenuPortal>
                                                    <DropdownMenuSubContent>
                                                        <DropdownMenuSub v-for="children in childrens"
                                                            :key="children.id">
                                                            <DropdownMenuSubTrigger>
                                                                <UserPlus />
                                                                <span>{{ children.child_name }}</span>
                                                            </DropdownMenuSubTrigger>
                                                            <DropdownMenuPortal>
                                                                <DropdownMenuSubContent>
                                                                    <DropdownMenuItem>
                                                                        <Mail />
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'kids'
                                                                        " :href="'/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Disc Report</a>
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'teen'
                                                                        " :href="'/teens/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Disc Report</a>
                                                                    </DropdownMenuItem>
                                                                    <DropdownMenuItem>
                                                                        <MessageSquare />
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'kids'
                                                                        " :href="'/kids/learning-style/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Learning Style
                                                                            Report</a>
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'teen'
                                                                        " :href="'/teens/learning-style/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Learning Style
                                                                            Report</a>
                                                                    </DropdownMenuItem>
                                                                </DropdownMenuSubContent>
                                                            </DropdownMenuPortal>
                                                        </DropdownMenuSub>
                                                    </DropdownMenuSubContent>
                                                </DropdownMenuPortal>
                                            </DropdownMenuSub>

                                            <!-- Second Term Report -->
                                            <DropdownMenuSub>
                                                <DropdownMenuSubTrigger>
                                                    <span>Second Term Report</span>
                                                </DropdownMenuSubTrigger>
                                                <DropdownMenuPortal>
                                                    <DropdownMenuSubContent>
                                                        <DropdownMenuSub v-for="children in childrens"
                                                            :key="children.id">
                                                            <DropdownMenuSubTrigger>
                                                                <UserPlus />
                                                                <span>{{ children.child_name }}</span>
                                                            </DropdownMenuSubTrigger>
                                                            <DropdownMenuPortal>
                                                                <DropdownMenuSubContent>
                                                                    <DropdownMenuItem>
                                                                        <Mail />
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'kids'
                                                                        " :href="'/second-term/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Disc Report</a>
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'teen'
                                                                        " :href="'/second-term/teens/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Disc Report</a>
                                                                    </DropdownMenuItem>
                                                                    <DropdownMenuItem>
                                                                        <MessageSquare />
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'kids'
                                                                        " :href="'/second-term/kids/learning-style/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Learning Style
                                                                            Report</a>
                                                                        <a class="font-normal" v-if="
                                                                            children.child_type ==
                                                                            'teen'
                                                                        " :href="'/second-term/teens/learning-style/reports/assessments/introduction/' +
                                                                            children.id
                                                                            ">Learning Style
                                                                            Report</a>
                                                                    </DropdownMenuItem>
                                                                </DropdownMenuSubContent>
                                                            </DropdownMenuPortal>
                                                        </DropdownMenuSub>
                                                    </DropdownMenuSubContent>
                                                </DropdownMenuPortal>
                                            </DropdownMenuSub>
                                        </DropdownMenuGroup>
                                    </DropdownMenuContent>
                                </DropdownMenu>

                            </a>
                            <a v-if="hasActiveSubscription && accessData?.ask_ai === '1'" href="#"
                                class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue">
                                <Link
                                    class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue"
                                    :href="route('ask.ai')">
                                Ask AI
                                </Link>
                            </a>

                            <a v-if="hasActiveSubscription && accessData?.simplify === '0'" href="#"
                                class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue">
                                <Link
                                    class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue"
                                    :href="route('add.simplify')">
                                Get Simplify
                                </Link>
                            </a>

                            <a v-if="hasActiveSubscription && accessData?.simplify === '1'" href="#"
                                class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue">
                                <DropdownMenu>
                                    <DropdownMenuTrigger>
                                        <div class="rounded-full">Simplify</div>
                                    </DropdownMenuTrigger>
                                    <DropdownMenuContent>
                                        <DropdownMenuItem>
                                            <Link :href="route('simplify.index')">Set up Simplify</Link>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem>
                                            <Link :href="route('profile.child.addmore')">
                                            Add Kid</Link>
                                        </DropdownMenuItem>
                                    </DropdownMenuContent>
                                </DropdownMenu>
                            </a>

                            <a v-if="hasActiveSubscription && accessData?.my_report !== '1' && accessData?.simplify === '1'"
                                :href="route('profile.child.addmore')"
                                class="rounded-md font-bold px-1 py-2 text-sm font-medium text-gray-700 hover:text-blue">
                                Take Assesment
                            </a>
                        </div>
                    </div>
                    <div class="inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:ml-6 md:pr-0 mr-2">
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div class="relative ml-3">
                                <ul class="flex-row flex h-full items-center justify-evenly p-0 m-0">
                                    <li>
                                        <DropdownMenu>
                                            <DropdownMenuTrigger>
                                                <img class="rounded-full flex bg-white w-10 h-10 object-contain" :src="'/storage/' +
                                                    $page.props.auth.user.image
                                                    " @error="
                                                        $event.target.src =
                                                        '/images/default/placeholder.png'
                                                        " alt="User Profile" />
                                            </DropdownMenuTrigger>

                                            <DropdownMenuContent class="">
                                                <DropdownMenuGroup>
                                                    <!-- My Profile -->
                                                    <DropdownMenuItem>
                                                        <Link class="text-gray-800" :href="route(
                                                            'profile.report'
                                                        )
                                                            ">My Profile</Link>
                                                    </DropdownMenuItem>
                                                    <DropdownMenuItem>
                                                        <Link class="text-gray-800" :href="route(
                                                            'profile.edit'
                                                        )
                                                            ">Settings</Link>
                                                    </DropdownMenuItem>
                                                    <!-- <DropdownMenuItem><Link :href="route('profile.information')">Information</Link></DropdownMenuItem> -->
                                                    <DropdownMenuItem @click="this.logout" class="text-gray-800">Logout
                                                    </DropdownMenuItem>

                                                    <!-- Ask AI -->
                                                    <DropdownMenuItem v-if="
                                                        !isMdOrLarger && hasActiveSubscription &&
                                                        accessData?.ask_ai ===
                                                        '1'
                                                    ">
                                                        <Link class="text-gray-800" :href="route('ask.ai')">
                                                        Ask AI
                                                        </Link>
                                                    </DropdownMenuItem>

                                                    <DropdownMenuItem
                                                        v-if="!isMdOrLarger && hasActiveSubscription && accessData?.simplify == 0">
                                                        <Link class="text-gray-800" :href="route('add.simplify')">
                                                        Get Simplify
                                                        </Link>
                                                    </DropdownMenuItem>

                                                    <!-- My Report -->
                                                    <DropdownMenuSub v-if="
                                                        !isMdOrLarger && hasActiveSubscription &&
                                                        this.pakageId != 3
                                                    ">
                                                        <DropdownMenuSubTrigger>
                                                            <span>My Report</span>
                                                        </DropdownMenuSubTrigger>
                                                        <DropdownMenuPortal>
                                                            <DropdownMenuSubContent>
                                                                <DropdownMenuSub v-for="children in childrens" :key="children.id
                                                                    ">
                                                                    <DropdownMenuSubTrigger>
                                                                        <UserPlus />
                                                                        <span>{{
                                                                            children.child_name
                                                                        }}</span>
                                                                    </DropdownMenuSubTrigger>
                                                                    <DropdownMenuPortal>
                                                                        <DropdownMenuSubContent>
                                                                            <DropdownMenuItem>
                                                                                <Mail />
                                                                                <a class="font-normal" v-if="
                                                                                    children.child_type ==
                                                                                    'kids'
                                                                                " :href="'/reports/assessments/introduction/' +
                                                                                    children.id
                                                                                    ">Disc
                                                                                    Report</a>
                                                                                <a class="font-normal" v-if="
                                                                                    children.child_type ==
                                                                                    'teen'
                                                                                " :href="'/teens/reports/assessments/introduction/' +
                                                                                    children.id
                                                                                    ">Disc
                                                                                    Report</a>
                                                                            </DropdownMenuItem>
                                                                            <DropdownMenuItem>
                                                                                <MessageSquare />
                                                                                <a class="font-normal" v-if="
                                                                                    children.child_type ==
                                                                                    'kids'
                                                                                " :href="'/kids/learning-style/reports/assessments/introduction/' +
                                                                                    children.id
                                                                                    ">Learning
                                                                                    Style
                                                                                    Report</a>
                                                                                <a class="font-normal" v-if="
                                                                                    children.child_type ==
                                                                                    'teen'
                                                                                " :href="'/teens/learning-style/reports/assessments/introduction/' +
                                                                                    children.id
                                                                                    ">Learning
                                                                                    Style
                                                                                    Report</a>
                                                                            </DropdownMenuItem>
                                                                        </DropdownMenuSubContent>
                                                                    </DropdownMenuPortal>
                                                                </DropdownMenuSub>
                                                            </DropdownMenuSubContent>
                                                        </DropdownMenuPortal>
                                                    </DropdownMenuSub>
                                                </DropdownMenuGroup>
                                            </DropdownMenuContent>
                                        </DropdownMenu>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Add a spacer div to prevent content jump -->

</template>

<script>
import { Link } from "@inertiajs/vue3";

// import {
//     DropdownMenu,
//     DropdownMenuTrigger,
//     DropdownMenuItem,
//     DropdownMenuContent,
//     DropdownMenuLabel,
//     DropdownMenuSeparator,
// } from "@/shadcn/ui/dropdown-menu";

import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuGroup,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
    DropdownMenuSub,
    DropdownMenuSubTrigger,
    DropdownMenuPortal,
    DropdownMenuSubContent,
} from "@/shadcn/ui/dropdown-menu";

import Toast from "primevue/toast";
import { watch, ref, provide } from "vue";

export default {
    name: "NavBar",
    components: {
        DropdownMenu,
        Link,
        DropdownMenuItem,
        DropdownMenuContent,
        DropdownMenuGroup,
        DropdownMenuLabel,
        DropdownMenuSeparator,
        DropdownMenuTrigger,
        Toast,
        DropdownMenuSub,
        DropdownMenuSubTrigger,
        DropdownMenuPortal,
        DropdownMenuSubContent,
    },
    data() {
        return {
            is_navbar_open: false,
            accessData: null, // Variable to store user access data,
            childrens: Array,
            childType: null,
            isMdOrLarger: false,
            is_navbar_open: false,
            pakageId: Number,
            currentPath: window.location.pathname, // Initialize with current URL
            isTeenRoute: this.$page.url.includes("teens"),
            isKidsLSRoute: this.$page.url.includes("kids/learning-style"),
            hasActiveSubscription: false,
        };
    },
    methods: {
        toggleSidebar() {
            this.isSidebarOpen = !this.isSidebarOpen;
        },
        closeSidebar() {
            if (!this.isMdOrLarger) {
                this.isSidebarOpen = false; // Mobile pe click karne se band ho jaye
            }
        },

        handleResize() {
            this.isMdOrLarger = window.innerWidth >= 768;
            this.isSidebarOpen = window.innerWidth >= 768; // Desktop pe auto open
        },
        get_sidebar_update() {
            if (this.isSection2aOpen) {
                this.isSubSidebarVisible = true;
            } else {
                this.isSubSidebarVisible = false;
            }
            // const str = this.$page.url;
            // const parts = str.split('/');  // Split by '/'
            // const lastPart = parts[parts.length - 1];  // Get the last element
            // this.currentChildId = lastPart;
        },
        checkScreenSize() {
            // Check if the screen width is at least 'md' (768px) or larger
            this.isMdOrLarger = window.innerWidth >= 768;
        },
        logout() {
            this.$inertia.post(route("logout"));
        },
        checkUserAccess() {
            axios
                .get(route("profile.check-user-access"))
                .then((response) => {
                    // Check if the response contains the expected data
                    console.log(response);
                    if (response.data && response.data.status === "Success") {
                        this.accessData = response.data.accessData; // Store the data in a variable
                        this.childType = response.data.childType.child_type;
                        this.pakageId = response.data.pakage.pakage_id;
                        this.hasActiveSubscription = response.data.hasActiveSubscription;

                        // alert(this.accessData.my_report);
                        console.log("Access Data:", this.accessData);
                    } else {
                        console.error("Unexpected response format:", response);
                    }
                })
                .catch((error) => {
                    // Log detailed error information
                    if (error.response) {
                        // Server responded with a status code outside of the 2xx range
                        console.error("Response Error:", error.response.data);
                    } else if (error.request) {
                        // Request was made but no response received
                        console.error("No Response:", error.request);
                    } else {
                        // Something else caused the error
                        console.error("Error:", error.message);
                    }
                });
        },
        getChildrens() {
            axios
                .get(route("profile.childrens"))
                .then((response) => {
                    // Check if the response contains the expected data
                    console.log(response.data);
                    if (response.data) {
                        this.childrens = response.data.childrens;
                    } else {
                        console.error("Unexpected response format:", response);
                    }
                })
                .catch((error) => {
                    // Log detailed error information
                    console.error("Response Error:", error);
                });
        },
        saveChildrenStyleInState() { },
        isActive(routePaths) {
            return routePaths.includes(this.currentPath);
        },
    },
    mounted() {
        window.removeEventListener("resize", this.handleResize);
        this.checkScreenSize();
        this.get_sidebar_update();
        this.checkUserAccess();
        this.getChildrens();

        if (this.$page.props.flash?.success) {
            this.$toast.add({
                severity: "success",
                summary: "Success",
                detail: this.$page.props.flash.success,
                life: 3000,
            });
        }
        if (this.$page.props.flash?.error) {
            this.$toast.add({
                severity: "error",
                summary: "Error",
                detail: this.$page.props.flash.error,
                life: 3000,
            });
        }
        if (this.$page.props.flash?.warning) {
            this.$toast.add({
                severity: "warn",
                summary: "Warning",
                detail: this.$page.props.flash.warning,
                life: 3000,
            });
        }
        if (this.$page.props.flash?.info) {
            this.$toast.add({
                severity: "info",
                summary: "Info",
                detail: this.$page.props.flash.info,
                life: 3000,
            });
        }

        watch(
            () => this.$page.props.flash,
            (new_flash) => {
                if (new_flash?.success) {
                    this.$toast.add({
                        severity: "success",
                        summary: "Success",
                        detail: new_flash.success,
                        life: 3000,
                    });
                }
                if (new_flash?.error) {
                    this.$toast.add({
                        severity: "error",
                        summary: "Error",
                        detail: new_flash.error,
                        life: 3000,
                    });
                }
                if (new_flash?.warning) {
                    this.$toast.add({
                        severity: "warn",
                        summary: "Warning",
                        detail: new_flash.warning,
                        life: 3000,
                    });
                }
                if (new_flash?.info) {
                    this.$toast.add({
                        severity: "info",
                        summary: "Info",
                        detail: new_flash.info,
                        life: 3000,
                    });
                }
            },
            { deep: true }
        );
    },
    updated() {
        window.addEventListener("resize", this.handleResize);
    },
};
</script>

<style scoped>
nav {
    width: 100%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.font-bold {
    font-weight: 700;
}

.black-color {
    color: #020817;
}

a {
    font-weight: normal;
}

li {
    margin-top: 0;
}

@media (min-width: 768px) {
    .logo-class {
        margin-left: 0rem !important;
    }
}

.logo-class {
    margin-left: 3rem;
}
</style>
