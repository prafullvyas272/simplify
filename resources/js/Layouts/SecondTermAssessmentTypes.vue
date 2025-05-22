<template>
    <header class="fixed top-0 left-0 right-0 z-50 w-full">
        <!-- Relative container for absolute positioning -->
        <div class="relative h-16">
            <!-- Import Navbar -->
            <NavBar />

            <!-- Import Hamburger Button - Updated positioning -->
            <button @click="toggleSidebar" data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                aria-controls="default-sidebar" type="button"
                class="fixed top-3 left-2 z-50 inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <svg v-if="isSidebarOpen" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                <svg v-if="!isSidebarOpen" class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Add a spacer div to prevent content jump -->
    <div class="h-16"></div>

    <aside id="default-sidebar" :class="[
        'border-r border-[#8080805c] top-16 bg-white shadow-[13px_0_38px_-31px_rgba(0,0,0,0.28)] fixed left-0 z-40 w-[20rem] h-[calc(100vh-4rem)] transition-transform',
        {
            'translate-x-0': isSidebarOpen,
            '-translate-x-full': !isSidebarOpen,
        }
    ]" aria-label="Sidebar">
        <div class="pt-3 h-full pb-5 overflow-y-auto">
            <div class="flex shrink-0 items-center md:justify-center justify-between"></div>
            <ul class="space-y-2 pl-0">
                <li class="text-xs m-0" v-if="
                    !isKidsLearningStyleReports &&
                    isKidsReports &&
                    !isTeensDiscStyleReports &&
                    !isTeensLearningStyleReports
                ">
                    <div v-for="type in kidsDiscReportSidebarMenus">
                        <Link @click="closeSidebar" v-if="!type.children" :class="this.$page.url.includes(type.link)
                                ? 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white bg-gray-100 dark:bg-gray-700  '
                                : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group '
                            " class="capitalize" :href="route('secondTerm.showKidsDiscStyleReport', {
                                user: currentChildId,
                                type: type.link,
                            })
                                ">
                        {{ getSideBarMenuName(type) }}
                        </Link>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div v-if="isSidebarOpen" class="fixed inset-0 bg-opacity-50 md:hidden pl-4 md:ml-64" @click="toggleSidebar"></div>

    <div class="pl-0 md:ml-[20rem]">
        <div class="rounded-l-lg pb-2">
            <slot />

            <!-- KIDS DISC REPORT DONE TYPES-->
            <div class="w-full flex justify-between mt-10" :class="{ '!justify-end': this.active_index === null }">
                <Link v-if="this.active_index > 0" class="unify_button py-2 px-5" :href="route('secondTerm.showKidsDiscStyleReport', {
                    user: currentChildId,
                    type: '',
                })
                    ">
                Previous
                </Link>
                <Link v-if="this.active_index < 20" class="unify_button py-2 px-5" :href="route('secondTerm.showKidsDiscStyleReport', {
                    user: currentChildId,
                    type: this.kidsDiscReportSidebarMenus[this.active_index + 1].link,
                })
                    ">
                Next
                </Link>
            </div>
        </div>
    </div>
</template>

<script>
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
import NavBar from "@/Components/Navigation/NavBar.vue";
import { Link } from "@inertiajs/vue3";

import kidsDiscReportMenus from "@/Data/SecondTerm/Kids/Discs/DiscReport";
export default {
    name: "SecondTermAssessmentTypes",
    components: {
        NavBar,
        DropdownMenu,
        Link,
        DropdownMenuItem,
        DropdownMenuContent,
        DropdownMenuGroup,
        DropdownMenuLabel,
        DropdownMenuSeparator,
        DropdownMenuTrigger,
        DropdownMenuSub,
        DropdownMenuSubTrigger,
        DropdownMenuPortal,
        DropdownMenuSubContent,
    },
    data() {
        return {
            isSidebarOpen: window.innerWidth >= 768,
            isMdOrLarger: false,
            is_navbar_open: false,
            isSubSidebarVisible: false,
            active_type: null,
            active_index: null,
            isTeensLearningStyleReports: this.$page.url.includes(
                "teens/learning-style"
            ),
            isTeensDiscStyleReports: this.$page.url.includes("teens/reports"),
            isKidsReports: this.$page.url.includes("reports/assessments"),
            isSection2aOpen: this.$page.url.includes(
                "assessments/your-disc-style-summary"
            ),
            currentChildId: this.$page.url.split("/").pop(),
            isKidsLearningStyleReports: this.$page.url.includes(
                "kids/learning-style"
            ),
            kidsDiscReportSidebarMenus :kidsDiscReportMenus
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
        checkScreenSize() {
            // Check if the screen width is at least 'md' (768px) or larger
            this.isMdOrLarger = window.innerWidth >= 768;
        },
        handleResize() {
            this.isMdOrLarger = window.innerWidth >= 768;
            this.isSidebarOpen = window.innerWidth >= 768; // Desktop pe auto open
        },
        getSideBarMenuName(type) {
            const text = type?.text;
            const isDynamicData = type?.isDynamicData;
            if (isDynamicData && type?.childNameNeeded) {
                return text.replace('[Child’s Name]', this.$attrs?.childName);
            } else if (isDynamicData && type?.discStyleNeeded) {
                return text.replace('[Disc Style]', 'SI');      //TODO: style should be dynamic and with full-form
            } else {
                return text;
            }
        }
    },
    updated() {
        console.log('updated______resize');
        window.addEventListener("resize", this.handleResize);
        this.checkScreenSize();
        // this.get_teens_active_type();
    },
    mounted() {
        window.removeEventListener("resize", this.handleResize);
        this.checkScreenSize();
    },
};
</script>

<style scoped>
#subSidebar {
    transition: all 0.3s ease-in-out;
}

#subSidebar {
    transition: all 0.3s ease-in-out;
}

.overflow-scroll {
    overflow: auto !important;
}

.\!bg-cover {
    height: 420px;
}

@media screen and (min-width: 1920px) {
    .\!bg-cover {
        height: 450px;
    }

    .heigh-adjustment-scroller {
        height: 90vh;
    }
}

.up {
    transform: rotate(-135deg);
    margin-left: 10px;

    -webkit-transform: rotate(-135deg);
}

.subSidebarMenu {
    gap: 10px;
    display: flex;
    flex-direction: column;
    margin-top: 14px;
}

.arrow {
    border: solid black;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
}

.down {
    transform: rotate(45deg);
    margin-left: 10px;

    -webkit-transform: rotate(45deg);
}

.Arrowmain {
    align-items: center;
    display: flex;
    gap: 3px;
}

.State {
    height: 22px;
    width: 30px;
}

aside {
    transition: transform 0.3s ease-in-out;
}

</style>
