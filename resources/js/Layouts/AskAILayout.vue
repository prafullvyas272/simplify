<template>
  
  <header class="fixed top-0 left-0 right-0 z-50 w-full">
        <!-- Relative container for absolute positioning -->
        <div class="relative h-16">
            <!-- Import Navbar -->
            <NavBar />

            <!-- Import Hamburger Button - Updated positioning -->
            <button
                @click="toggleSidebar"
                data-drawer-target="default-sidebar"
                data-drawer-toggle="default-sidebar"
                aria-controls="default-sidebar"
                type="button"
                class="fixed top-3 left-2 z-50 inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            >
                <svg
                    v-if="isSidebarOpen"
                    class="size-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
                <svg
                    v-if="!isSidebarOpen"
                    class="w-6 h-6"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                    ></path>
                </svg>
            </button>
        </div>
    </header>
    <aside
       
        id="default-sidebar"
        :class="[
                'border-r border-[#8080805c] top-unset bg-white shadow-[13px_0_38px_-31px_rgba(0,0,0,0.28)] fixed left-0 z-40 w-[20rem] h-screen transition-transform',
                {
                    'translate-x-0': isSidebarOpen,
                    '-translate-x-full': !isSidebarOpen,
                }
            ]"        aria-label="Sidebar"
    >
        <div class="pt-3 h-full px-3 pb-5 overflow-y-auto">
            <div
                class="flex shrink-0 items-center md:justify-center justify-between"
            ></div>

            <ul class="space-y-2 pl-0">
                <h2 class="text-3xl font-bold mb-4 mt-3">
                    Hi {{ $page.props.auth.user.name }}!
                </h2>
             
                <li>
                    <Link     
                     @click="closeSidebar"
                    :class="
                            this.$page.url.includes('ask-ai')
                                ? 'flex items-center p-2 font-bold text-gray-900 rounded-lg dark:text-white bg-gray-100 dark:bg-gray-700  '
                                : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group '
                        "
                        :href="route('ask.ai')">
                    <img src="/images/ask-ai.png" class="mr-2" width="35"/>
                    Ask AI
                </Link>
                </li>
            </ul>
        </div>
    </aside>

    <div
        v-if="isSidebarOpen"
        class="fixed inset-0 bg-opacity-50 md:hidden pl-4 md:ml-64"
        @click="toggleSidebar"
    ></div>

    <div class="pl-4 md:ml-[20rem]">
        <div class="rounded-l-lg pb-2">
            <slot />
        </div>
    </div>

</template>


<script>
import NavBar from "@/Components/Navigation/NavBar.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "AskAILayout",
    components: {Link, NavBar},
    data() {
        return {
            isSidebarOpen: window.innerWidth >= 768,
            isMdOrLarger: false,
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
        checkScreenSize() {
            // Check if the screen width is at least 'md' (768px) or larger
            this.isMdOrLarger = window.innerWidth >= 768;
        },
        isActive(routePath) {
            return routePath.includes(window.location.pathname);
        }
    },
    mounted() {
        console.log("mounted______resize");

        // Call handleResize once to set the initial state
        this.handleResize();

        // Then add the event listener for future resizes
        window.addEventListener("resize", this.handleResize);
    },
    beforeUnmount() {
        console.log("beforeUnmount______resize");

        // Clean up the event listener to avoid memory leaks
        window.removeEventListener("resize", this.handleResize);
    },
}
</script>

<style>
.highlightedText
{
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVR4nGN4brcfAAP0AeVxbIyVAAAAAElFTkSuQmCC);
    background-repeat: repeat-x;
    background-position: 0px 85%;
    background-size: 1px 25%;
}
.font-bold-extra {
    font-weight: 900 !important;
  }
</style>
