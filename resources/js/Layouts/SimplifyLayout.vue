<template>
     <header class=" top-0 left-0 right-0 z-50 w-full">
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
            },
        ]"
        aria-label="Sidebar"
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
                            (this.$page.url.includes('simplify') || this.$page.url.includes('how-it-works') )&& !this.$page.url.includes('simplify-activate-user') && !this.$page.url.includes('simplify-family-personalization-part-two')
                                ? 'flex items-center p-2 font-bold text-gray-900 rounded-lg dark:text-white bg-gray-100 dark:bg-gray-700  '
                                : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group '
                        "
                        :href="route('simplify.index')"
                    >
                        <!-- <svg class="inline" width="31" height="31" viewBox="0 0 12 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.625 10.125C9.67578 10.125 11.375 11.8242 11.375 13.875V19.5C11.375 20.5547 10.4961 21.375 9.5 21.375V28.875C9.5 29.9297 8.62109 30.75 7.625 30.75H3.875C2.82031 30.75 2 29.9297 2 28.875V21.375C0.945312 21.375 0.125 20.5547 0.125 19.5V13.875C0.125 11.8242 1.76562 10.125 3.875 10.125H7.625ZM5.75 8.25C3.64062 8.25 2 6.60938 2 4.5C2 2.44922 3.64062 0.75 5.75 0.75C7.80078 0.75 9.5 2.44922 9.5 4.5C9.5 6.60938 7.80078 8.25 5.75 8.25Z" fill="#061534"/>
                    </svg> -->
                        <svg
                            class="inline mr-2"
                            width="30"
                            height="31"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 452.000000 521.000000"
                        >
                            <g
                                transform="translate(0.000000,521.000000) scale(0.100000,-0.100000)"
                                :fill="
                                    isActive(['/simplify', '/how-it-works'])
                                        ? 'black'
                                        : 'grey'
                                "
                                stroke="none"
                            >
                                <path
                                    d="M2183 4942 c-12 -2 -33 -15 -47 -29 l-26 -26 0 -193 c0 -189 0 -193
                        24 -221 20 -23 32 -28 71 -28 39 0 51 5 71 28 23 28 24 32 24 213 0 146 -3
                        191 -15 214 -9 17 -17 30 -18 30 -1 0 -16 4 -32 8 -17 4 -40 6 -52 4z"
                                />
                                <path
                                    d="M2139 4180 c-40 -12 -68 -29 -79 -50 -6 -10 -15 -68 -21 -127 -6 -59
                        -17 -122 -24 -139 -14 -34 -53 -58 -172 -105 -91 -36 -103 -32 -218 68 -87 75
                        -113 87 -154 72 -31 -12 -256 -232 -277 -271 -22 -42 -17 -62 29 -118 117
                        -143 137 -172 137 -200 0 -15 -18 -72 -39 -127 -42 -105 -59 -123 -118 -123
                        -18 0 -78 -5 -135 -12 -153 -17 -148 -9 -148 -252 0 -257 -9 -245 190 -263 78
                        -7 148 -17 156 -24 7 -6 22 -34 33 -62 10 -29 31 -77 45 -107 14 -30 26 -63
                        26 -72 0 -10 -30 -51 -67 -90 -91 -100 -123 -146 -123 -179 0 -33 36 -77 185
                        -222 132 -129 132 -129 278 -6 l109 91 126 -54 127 -54 12 -238 c19 -359 7
                        -348 345 -344 226 3 226 3 253 28 44 41 54 72 66 202 14 168 54 402 80 479 46
                        133 107 231 231 364 158 171 254 353 299 570 18 82 18 352 0 440 -44 224 -154
                        429 -316 591 -209 208 -450 317 -745 337 -36 3 -77 1 -91 -3z m287 -215 c499
                        -144 800 -661 674 -1157 -43 -172 -109 -293 -235 -429 -109 -119 -167 -200
                        -219 -305 -78 -158 -105 -272 -154 -664 l-7 -55 -140 0 -140 0 -7 135 c-18
                        337 -18 339 -43 369 -14 16 -53 38 -97 55 -40 15 -125 53 -189 83 -88 42 -123
                        54 -143 49 -14 -3 -66 -42 -116 -86 l-91 -81 -32 27 c-65 54 -107 94 -107 101
                        0 5 36 49 80 98 98 111 108 135 81 201 -11 27 -44 112 -74 189 -68 176 -72
                        179 -223 189 -60 4 -120 12 -134 19 -24 12 -25 16 -25 97 l0 84 140 16 c77 8
                        150 21 162 28 14 8 34 45 59 109 20 54 52 133 70 176 52 121 50 134 -53 261
                        l-86 107 65 66 66 66 54 -43 c29 -24 74 -63 100 -87 63 -58 86 -56 229 10 63
                        30 141 64 174 77 62 24 91 43 105 70 5 9 14 71 21 139 l12 124 67 -7 c37 -3
                        107 -17 156 -31z"
                                />
                                <path
                                    d="M2147 3464 c-259 -57 -463 -261 -527 -525 -25 -107 -25 -194 0 -295
                        54 -212 190 -377 388 -472 107 -51 246 -75 320 -56 l22 6 0 674 0 674 -32 0
                        c-18 0 -49 2 -68 5 -19 2 -66 -3 -103 -11z m37 -160 c14 -5 16 -60 16 -516 l0
                        -511 -37 6 c-21 4 -71 23 -110 42 -213 105 -332 354 -278 583 33 141 136 280
                        249 339 24 12 132 60 143 63 1 0 8 -3 17 -6z"
                                />
                                <path
                                    d="M424 3890 c-53 -21 -70 -97 -34 -143 20 -25 184 -129 277 -176 61
                        -30 99 -28 134 10 36 39 39 87 7 124 -29 32 -316 195 -343 194 -11 0 -30 -4
                        -41 -9z"
                                />
                                <path
                                    d="M3655 3815 c-82 -47 -160 -97 -172 -111 -33 -37 -31 -88 6 -125 47
                        -47 78 -41 232 47 157 89 214 141 205 189 -8 40 -43 72 -86 80 -31 5 -53 -4
                        -185 -80z"
                                />
                                <path
                                    d="M655 2287 c-135 -75 -261 -151 -272 -166 -16 -20 -16 -73 -2 -105 14
                        -31 60 -50 99 -42 41 8 289 152 323 187 15 17 27 41 27 55 0 52 -49 104 -98
                        104 -9 0 -44 -15 -77 -33z"
                                />
                                <path
                                    d="M3515 2306 c-50 -22 -68 -82 -41 -134 19 -35 290 -192 346 -199 34
                        -5 43 -1 70 25 34 35 40 83 14 120 -23 33 -314 203 -346 202 -7 -1 -27 -7 -43
                        -14z"
                                />
                                <path
                                    d="M2085 1077 c-60 -29 -120 -92 -135 -144 -7 -25 -10 -119 -8 -274 l3
                        -236 30 -49 c19 -30 49 -60 79 -79 l49 -30 241 -3 c267 -3 283 -1 352 60 69
                        61 78 96 82 325 2 128 0 222 -8 257 -14 69 -60 132 -120 166 -44 24 -50 25
                        -280 28 -229 2 -236 2 -285 -21z m478 -149 c44 -23 46 -33 47 -251 0 -277 19
                        -257 -245 -257 -212 0 -247 7 -259 52 -3 13 -6 110 -6 216 l0 194 29 29 29 29
                        192 0 c126 0 199 -4 213 -12z"
                                />
                            </g>
                        </svg>
                        How It Works
                    </Link>
                </li>
                <li>
                    <Link
                        @click="closeSidebar"
                        :class="
                            this.$page.url.includes('activate-user') || this.$page.url.includes('simplify-family-personalization-part-two')
                                ? 'flex items-center p-2 font-bold text-gray-900 rounded-lg dark:text-white bg-gray-100 dark:bg-gray-700  '
                                : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group '
                        "
                        :href="
                            $page.props.auth.user.simplify_status
                                ? route('simplify.activate.user')
                                : route('simplify.activate.user')
                        "
                    >
                        <svg
                            class="inline mr-2"
                            width="30"
                            height="31"
                            viewBox="0 0 510.000000 534.000000"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g
                                transform="translate(0.000000,534.000000) scale(0.100000,-0.100000)"
                                :fill="
                                    isActive([
                                        '/simplify-activate-user',
                                        '/simplify-family-personalization',
                                        '/simplify-family-personalization-part-two',
                                        '/whats-next',
                                    ])
                                        ? 'black'
                                        : 'grey'
                                "
                                stroke="none"
                            >
                                <path
                                    d="M2379 4855 c-275 -45 -493 -149 -685 -329 -304 -283 -451 -701 -389
                        -1104 19 -122 26 -149 59 -242 152 -421 514 -733 956 -821 106 -21 376 -16
                        492 9 566 124 925 528 989 1113 14 131 4 273 -32 433 -78 351 -310 650 -627
                        810 -223 112 -544 167 -763 131z"
                                />
                                <path
                                    d="M1294 2337 c-104 -61 -254 -184 -378 -311 -382 -391 -609 -913 -641
                        -1471 -8 -144 1 -190 52 -246 68 -75 -108 -70 2253 -67 l2115 3 48 28 c92 54
                        106 107 89 339 -48 667 -409 1307 -956 1693 -64 45 -76 50 -136 53 -53 3 -75
                        0 -108 -17 -22 -11 -44 -26 -48 -32 -12 -20 -187 -130 -284 -179 -240 -121
                        -551 -189 -803 -177 -366 18 -690 131 -962 334 -81 61 -93 67 -144 70 -45 3
                        -64 -1 -97 -20z"
                                />
                            </g>
                        </svg>
                        <span
                            :class="
                                isActive([
                                    '/simplify-activate-user',
                                    '/simplify-family-personalization',
                                    '/simplify-family-personalization-part-two',
                                    '/whats-next',
                                ])
                                    ? ''
                                    : 'text-gray-500'
                            "
                            @click="
                                handleLinkClick(
                                    $page.props.auth.user.simplify_status
                                        ? route(
                                              'simplify.activate.FamilyPersonalizationPartTwo'
                                          )
                                        : route('simplify.activate.user')
                                )
                            "
                            class=""
                        >
                            My Account
                        </span>
                        <!-- <div class="opacity-0 group-hover:opacity-100 border-2 transition-opacity duration-50  border-pink-600 relative -mt-3 -z-10 w-[60%] ml-[30px] "> </div> -->
                    </Link>
                </li>
                <li>
                    <Link
                        @click="closeSidebar"
                        :class="
                            this.$page.url.includes('faq')
                                ? 'flex items-center p-2 font-bold text-gray-900 rounded-lg dark:text-white bg-gray-100 dark:bg-gray-700  '
                                : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group '
                        "
                        :href="route('simplify.faq')"
                    >
                        <svg
                            class="inline mr-2"
                            width="30"
                            height="31"
                            viewBox="0 0 411.000000 378.000000"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g
                                transform="translate(0.000000,378.000000) scale(0.100000,-0.100000)"
                                :fill="isActive(['/faq']) ? 'black' : 'grey'"
                                stroke="none"
                            >
                                <path
                                    d="M1824 3342 c-22 -15 -33 -51 -54 -187 -12 -77 -26 -163 -31 -191
                            l-10 -52 -86 -33 c-47 -19 -96 -38 -108 -43 -19 -8 -47 8 -186 107 -119 85
                            -172 117 -194 117 -25 0 -52 -23 -172 -143 -116 -116 -143 -148 -143 -171 0
                            -20 35 -77 116 -194 l116 -165 -26 -56 c-15 -31 -35 -81 -45 -111 -17 -53 -19
                            -55 -62 -62 -261 -40 -329 -52 -356 -64 l-33 -13 0 -220 c0 -218 0 -221 22
                            -235 22 -13 89 -27 312 -64 l99 -17 22 -65 c12 -36 32 -84 44 -108 26 -51 39
                            -25 -114 -239 -58 -80 -105 -155 -105 -166 0 -12 56 -76 148 -169 112 -113
                            153 -148 172 -148 14 0 54 21 90 46 36 25 81 56 100 69 19 13 66 47 104 74
                            l70 50 45 -23 c25 -13 74 -34 108 -46 71 -25 62 -7 93 -207 29 -193 39 -232
                            60 -243 11 -6 107 -10 223 -10 189 0 205 1 222 19 11 13 25 66 40 153 52 296
                            42 266 83 279 21 7 69 27 109 45 l71 32 169 -119 c101 -71 178 -119 192 -119
                            18 0 62 37 168 142 79 79 146 153 149 165 7 28 0 41 -123 210 -57 79 -106 150
                            -109 158 -3 7 0 24 7 37 8 13 28 59 45 103 29 74 33 80 65 86 19 4 106 19 194
                            34 88 15 170 34 183 42 22 13 22 16 22 232 0 169 -3 221 -13 230 -7 6 -85 22
                            -173 36 -87 14 -179 29 -203 33 l-44 7 -32 80 c-17 44 -37 92 -45 108 -14 30
                            -18 23 172 294 29 43 51 84 51 99 0 20 -32 58 -144 170 -118 118 -149 144
                            -172 144 -21 0 -75 -33 -194 -119 l-166 -120 -46 23 c-25 13 -74 34 -108 46
                            -35 12 -63 24 -63 25 0 1 -7 42 -16 91 -8 49 -23 137 -33 197 -26 156 -11 147
                            -260 147 -113 0 -211 -4 -217 -8z m345 -174 c15 -72 40 -213 47 -268 11 -75
                            26 -94 86 -109 29 -7 100 -35 157 -62 57 -27 112 -49 122 -49 13 0 247 159
                            325 221 6 5 43 -25 97 -79 l87 -88 -115 -163 c-63 -90 -115 -170 -115 -178 0
                            -7 20 -53 44 -101 24 -48 53 -120 65 -159 23 -79 32 -87 101 -97 25 -4 79 -13
                            120 -21 41 -8 108 -19 148 -25 l73 -12 -3 -121 -3 -122 -165 -28 c-258 -45
                            -240 -36 -275 -142 -16 -50 -47 -124 -69 -164 -37 -71 -38 -75 -23 -106 12
                            -26 97 -148 201 -288 l20 -27 -84 -85 c-47 -47 -90 -83 -96 -81 -6 2 -80 52
                            -164 110 -84 58 -161 106 -172 106 -10 0 -49 -15 -86 -34 -38 -19 -109 -49
                            -159 -66 -54 -19 -94 -39 -98 -49 -3 -9 -20 -90 -36 -181 -17 -91 -32 -175
                            -36 -188 -5 -22 -8 -23 -126 -20 l-121 3 -18 105 c-10 58 -22 134 -28 170 -21
                            126 -20 126 -116 155 -46 14 -119 44 -161 65 -42 22 -84 40 -93 40 -9 0 -88
                            -50 -174 -110 -87 -61 -160 -110 -164 -110 -4 0 -45 38 -91 84 l-84 84 110
                            153 c60 85 113 162 116 172 4 11 -9 50 -37 106 -24 48 -54 119 -66 158 -12 39
                            -29 78 -38 86 -10 8 -97 29 -204 48 l-188 33 0 123 c0 119 1 123 23 127 12 3
                            94 17 182 31 88 15 170 33 181 40 14 9 30 40 44 86 12 40 42 112 66 161 35 69
                            42 92 35 110 -5 13 -57 91 -114 173 l-106 150 87 87 c75 76 88 86 103 75 10
                            -6 79 -57 155 -111 76 -54 146 -101 155 -103 10 -3 62 15 116 41 54 25 128 54
                            164 66 81 25 79 20 114 240 15 91 28 171 30 178 3 9 37 12 124 12 l120 0 10
                            -52z"
                                />
                                <path
                                    d="M1916 2519 c-187 -31 -319 -158 -342 -328 l-7 -51 110 0 110 0 14 47
                            c18 65 72 117 138 133 142 34 261 -43 261 -168 0 -83 -30 -126 -139 -201 -103
                            -70 -162 -133 -179 -189 -7 -22 -12 -74 -12 -116 l0 -76 110 0 110 0 0 44 c0
                            104 28 144 156 228 91 59 136 106 168 170 69 141 29 321 -93 417 -100 80 -259
                            115 -405 90z"
                                />
                                <path
                                    d="M1927 1406 c-48 -18 -62 -29 -81 -70 -50 -105 24 -218 143 -218 80 0
                            129 36 151 113 21 71 -28 159 -99 179 -47 13 -68 12 -114 -4z"
                                />
                            </g>
                        </svg>
                        <span
                            :class="isActive(['/faq']) ? '' : 'text-gray-500'"
                            @click="handleLinkClick('/faq')"
                        >
                            FAQ'S
                        </span>
                        <!-- <div class="opacity-0 group-hover:opacity-100 border-2 transition-opacity duration-50  border-pink-600 relative -mt-3 -z-10 w-[60%] ml-[30px] "> </div> -->
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
    <div class="hidden w-full flex flex-row mt-10 bg-gray-100 h-full">
        <div
            class="w-1/5 flex flex-col pt-4 pl-2 bg-gray-100"
            :class="isActive(['/how-it-works', 'faq']) ? 'sidebar' : 'sidebar'"
        >
            <div class="w-full mt-5">
                <h2 class="text-3xl">
                    Hi {{ $page.props.auth.user.first_name }}!
                </h2>
            </div>

            <div class="w-full gap-y-10 flex flex-col mt-10 font-bold text-xl">
                <!-- <Link class="group" :href="route('users.all_coaches')" v-if=" this.$page.props.auth.user.role_id ==3">
                    <svg class="inline" width="31" height="31" viewBox="0 0 12 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.625 10.125C9.67578 10.125 11.375 11.8242 11.375 13.875V19.5C11.375 20.5547 10.4961 21.375 9.5 21.375V28.875C9.5 29.9297 8.62109 30.75 7.625 30.75H3.875C2.82031 30.75 2 29.9297 2 28.875V21.375C0.945312 21.375 0.125 20.5547 0.125 19.5V13.875C0.125 11.8242 1.76562 10.125 3.875 10.125H7.625ZM5.75 8.25C3.64062 8.25 2 6.60938 2 4.5C2 2.44922 3.64062 0.75 5.75 0.75C7.80078 0.75 9.5 2.44922 9.5 4.5C9.5 6.60938 7.80078 8.25 5.75 8.25Z" fill="#061534"/>
                    </svg>
                    <span class="group-hover:-ml-1 ml-1 transition-all duration-50">
                         Choose Your Coach
                    </span>

                </Link> -->

                <Link class="group" :href="route('simplify.index')">
                    <!-- <svg class="inline" width="31" height="31" viewBox="0 0 12 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.625 10.125C9.67578 10.125 11.375 11.8242 11.375 13.875V19.5C11.375 20.5547 10.4961 21.375 9.5 21.375V28.875C9.5 29.9297 8.62109 30.75 7.625 30.75H3.875C2.82031 30.75 2 29.9297 2 28.875V21.375C0.945312 21.375 0.125 20.5547 0.125 19.5V13.875C0.125 11.8242 1.76562 10.125 3.875 10.125H7.625ZM5.75 8.25C3.64062 8.25 2 6.60938 2 4.5C2 2.44922 3.64062 0.75 5.75 0.75C7.80078 0.75 9.5 2.44922 9.5 4.5C9.5 6.60938 7.80078 8.25 5.75 8.25Z" fill="#061534"/>
                    </svg> -->
                    <svg
                        class="inline"
                        width="30"
                        height="31"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 452.000000 521.000000"
                    >
                        <g
                            transform="translate(0.000000,521.000000) scale(0.100000,-0.100000)"
                            :fill="
                                isActive(['/simplify', '/how-it-works'])
                                    ? 'black'
                                    : 'grey'
                            "
                            stroke="none"
                        >
                            <path
                                d="M2183 4942 c-12 -2 -33 -15 -47 -29 l-26 -26 0 -193 c0 -189 0 -193
                        24 -221 20 -23 32 -28 71 -28 39 0 51 5 71 28 23 28 24 32 24 213 0 146 -3
                        191 -15 214 -9 17 -17 30 -18 30 -1 0 -16 4 -32 8 -17 4 -40 6 -52 4z"
                            />
                            <path
                                d="M2139 4180 c-40 -12 -68 -29 -79 -50 -6 -10 -15 -68 -21 -127 -6 -59
                        -17 -122 -24 -139 -14 -34 -53 -58 -172 -105 -91 -36 -103 -32 -218 68 -87 75
                        -113 87 -154 72 -31 -12 -256 -232 -277 -271 -22 -42 -17 -62 29 -118 117
                        -143 137 -172 137 -200 0 -15 -18 -72 -39 -127 -42 -105 -59 -123 -118 -123
                        -18 0 -78 -5 -135 -12 -153 -17 -148 -9 -148 -252 0 -257 -9 -245 190 -263 78
                        -7 148 -17 156 -24 7 -6 22 -34 33 -62 10 -29 31 -77 45 -107 14 -30 26 -63
                        26 -72 0 -10 -30 -51 -67 -90 -91 -100 -123 -146 -123 -179 0 -33 36 -77 185
                        -222 132 -129 132 -129 278 -6 l109 91 126 -54 127 -54 12 -238 c19 -359 7
                        -348 345 -344 226 3 226 3 253 28 44 41 54 72 66 202 14 168 54 402 80 479 46
                        133 107 231 231 364 158 171 254 353 299 570 18 82 18 352 0 440 -44 224 -154
                        429 -316 591 -209 208 -450 317 -745 337 -36 3 -77 1 -91 -3z m287 -215 c499
                        -144 800 -661 674 -1157 -43 -172 -109 -293 -235 -429 -109 -119 -167 -200
                        -219 -305 -78 -158 -105 -272 -154 -664 l-7 -55 -140 0 -140 0 -7 135 c-18
                        337 -18 339 -43 369 -14 16 -53 38 -97 55 -40 15 -125 53 -189 83 -88 42 -123
                        54 -143 49 -14 -3 -66 -42 -116 -86 l-91 -81 -32 27 c-65 54 -107 94 -107 101
                        0 5 36 49 80 98 98 111 108 135 81 201 -11 27 -44 112 -74 189 -68 176 -72
                        179 -223 189 -60 4 -120 12 -134 19 -24 12 -25 16 -25 97 l0 84 140 16 c77 8
                        150 21 162 28 14 8 34 45 59 109 20 54 52 133 70 176 52 121 50 134 -53 261
                        l-86 107 65 66 66 66 54 -43 c29 -24 74 -63 100 -87 63 -58 86 -56 229 10 63
                        30 141 64 174 77 62 24 91 43 105 70 5 9 14 71 21 139 l12 124 67 -7 c37 -3
                        107 -17 156 -31z"
                            />
                            <path
                                d="M2147 3464 c-259 -57 -463 -261 -527 -525 -25 -107 -25 -194 0 -295
                        54 -212 190 -377 388 -472 107 -51 246 -75 320 -56 l22 6 0 674 0 674 -32 0
                        c-18 0 -49 2 -68 5 -19 2 -66 -3 -103 -11z m37 -160 c14 -5 16 -60 16 -516 l0
                        -511 -37 6 c-21 4 -71 23 -110 42 -213 105 -332 354 -278 583 33 141 136 280
                        249 339 24 12 132 60 143 63 1 0 8 -3 17 -6z"
                            />
                            <path
                                d="M424 3890 c-53 -21 -70 -97 -34 -143 20 -25 184 -129 277 -176 61
                        -30 99 -28 134 10 36 39 39 87 7 124 -29 32 -316 195 -343 194 -11 0 -30 -4
                        -41 -9z"
                            />
                            <path
                                d="M3655 3815 c-82 -47 -160 -97 -172 -111 -33 -37 -31 -88 6 -125 47
                        -47 78 -41 232 47 157 89 214 141 205 189 -8 40 -43 72 -86 80 -31 5 -53 -4
                        -185 -80z"
                            />
                            <path
                                d="M655 2287 c-135 -75 -261 -151 -272 -166 -16 -20 -16 -73 -2 -105 14
                        -31 60 -50 99 -42 41 8 289 152 323 187 15 17 27 41 27 55 0 52 -49 104 -98
                        104 -9 0 -44 -15 -77 -33z"
                            />
                            <path
                                d="M3515 2306 c-50 -22 -68 -82 -41 -134 19 -35 290 -192 346 -199 34
                        -5 43 -1 70 25 34 35 40 83 14 120 -23 33 -314 203 -346 202 -7 -1 -27 -7 -43
                        -14z"
                            />
                            <path
                                d="M2085 1077 c-60 -29 -120 -92 -135 -144 -7 -25 -10 -119 -8 -274 l3
                        -236 30 -49 c19 -30 49 -60 79 -79 l49 -30 241 -3 c267 -3 283 -1 352 60 69
                        61 78 96 82 325 2 128 0 222 -8 257 -14 69 -60 132 -120 166 -44 24 -50 25
                        -280 28 -229 2 -236 2 -285 -21z m478 -149 c44 -23 46 -33 47 -251 0 -277 19
                        -257 -245 -257 -212 0 -247 7 -259 52 -3 13 -6 110 -6 216 l0 194 29 29 29 29
                        192 0 c126 0 199 -4 213 -12z"
                            />
                        </g>
                    </svg>
                    <span
                        :class="
                            isActive(['/simplify', '/how-it-works'])
                                ? ''
                                : 'text-gray-500'
                        "
                        @click="handleLinkClick(route('simplify.index'))"
                        class="group-hover:-ml-1 ml-1"
                    >
                        How It Works
                    </span>
                </Link>
                <Link
                    class="group"
                    :href="
                        $page.props.auth.user.simplify_status
                            ? route('simplify.activate.user')
                            : route('simplify.activate.user')
                    "
                >
                    <svg
                        class="inline"
                        width="30"
                        height="31"
                        viewBox="0 0 510.000000 534.000000"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g
                            transform="translate(0.000000,534.000000) scale(0.100000,-0.100000)"
                            :fill="
                                isActive([
                                    '/simplify-activate-user',
                                    '/simplify-family-personalization',
                                    '/simplify-family-personalization-part-two',
                                    '/whats-next',
                                ])
                                    ? 'black'
                                    : 'grey'
                            "
                            stroke="none"
                        >
                            <path
                                d="M2379 4855 c-275 -45 -493 -149 -685 -329 -304 -283 -451 -701 -389
                        -1104 19 -122 26 -149 59 -242 152 -421 514 -733 956 -821 106 -21 376 -16
                        492 9 566 124 925 528 989 1113 14 131 4 273 -32 433 -78 351 -310 650 -627
                        810 -223 112 -544 167 -763 131z"
                            />
                            <path
                                d="M1294 2337 c-104 -61 -254 -184 -378 -311 -382 -391 -609 -913 -641
                        -1471 -8 -144 1 -190 52 -246 68 -75 -108 -70 2253 -67 l2115 3 48 28 c92 54
                        106 107 89 339 -48 667 -409 1307 -956 1693 -64 45 -76 50 -136 53 -53 3 -75
                        0 -108 -17 -22 -11 -44 -26 -48 -32 -12 -20 -187 -130 -284 -179 -240 -121
                        -551 -189 -803 -177 -366 18 -690 131 -962 334 -81 61 -93 67 -144 70 -45 3
                        -64 -1 -97 -20z"
                            />
                        </g>
                    </svg>
                    <span
                        :class="
                            isActive([
                                '/simplify-activate-user',
                                '/simplify-family-personalization',
                                '/simplify-family-personalization-part-two',
                                '/whats-next',
                            ])
                                ? ''
                                : 'text-gray-500'
                        "
                        @click="
                            handleLinkClick(
                                $page.props.auth.user.simplify_status
                                    ? route(
                                          'simplify.activate.FamilyPersonalizationPartTwo'
                                      )
                                    : route('simplify.activate.user')
                            )
                        "
                        class="group-hover:-ml-1 ml-1"
                    >
                        My Account
                    </span>
                    <!-- <div class="opacity-0 group-hover:opacity-100 border-2 transition-opacity duration-50  border-pink-600 relative -mt-3 -z-10 w-[60%] ml-[30px] "> </div> -->
                </Link>

                <Link class="group" :href="route('simplify.faq')">
                    <svg
                        class="inline"
                        width="30"
                        height="31"
                        viewBox="0 0 411.000000 378.000000"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g
                            transform="translate(0.000000,378.000000) scale(0.100000,-0.100000)"
                            :fill="isActive(['/faq']) ? 'black' : 'grey'"
                            stroke="none"
                        >
                            <path
                                d="M1824 3342 c-22 -15 -33 -51 -54 -187 -12 -77 -26 -163 -31 -191
                            l-10 -52 -86 -33 c-47 -19 -96 -38 -108 -43 -19 -8 -47 8 -186 107 -119 85
                            -172 117 -194 117 -25 0 -52 -23 -172 -143 -116 -116 -143 -148 -143 -171 0
                            -20 35 -77 116 -194 l116 -165 -26 -56 c-15 -31 -35 -81 -45 -111 -17 -53 -19
                            -55 -62 -62 -261 -40 -329 -52 -356 -64 l-33 -13 0 -220 c0 -218 0 -221 22
                            -235 22 -13 89 -27 312 -64 l99 -17 22 -65 c12 -36 32 -84 44 -108 26 -51 39
                            -25 -114 -239 -58 -80 -105 -155 -105 -166 0 -12 56 -76 148 -169 112 -113
                            153 -148 172 -148 14 0 54 21 90 46 36 25 81 56 100 69 19 13 66 47 104 74
                            l70 50 45 -23 c25 -13 74 -34 108 -46 71 -25 62 -7 93 -207 29 -193 39 -232
                            60 -243 11 -6 107 -10 223 -10 189 0 205 1 222 19 11 13 25 66 40 153 52 296
                            42 266 83 279 21 7 69 27 109 45 l71 32 169 -119 c101 -71 178 -119 192 -119
                            18 0 62 37 168 142 79 79 146 153 149 165 7 28 0 41 -123 210 -57 79 -106 150
                            -109 158 -3 7 0 24 7 37 8 13 28 59 45 103 29 74 33 80 65 86 19 4 106 19 194
                            34 88 15 170 34 183 42 22 13 22 16 22 232 0 169 -3 221 -13 230 -7 6 -85 22
                            -173 36 -87 14 -179 29 -203 33 l-44 7 -32 80 c-17 44 -37 92 -45 108 -14 30
                            -18 23 172 294 29 43 51 84 51 99 0 20 -32 58 -144 170 -118 118 -149 144
                            -172 144 -21 0 -75 -33 -194 -119 l-166 -120 -46 23 c-25 13 -74 34 -108 46
                            -35 12 -63 24 -63 25 0 1 -7 42 -16 91 -8 49 -23 137 -33 197 -26 156 -11 147
                            -260 147 -113 0 -211 -4 -217 -8z m345 -174 c15 -72 40 -213 47 -268 11 -75
                            26 -94 86 -109 29 -7 100 -35 157 -62 57 -27 112 -49 122 -49 13 0 247 159
                            325 221 6 5 43 -25 97 -79 l87 -88 -115 -163 c-63 -90 -115 -170 -115 -178 0
                            -7 20 -53 44 -101 24 -48 53 -120 65 -159 23 -79 32 -87 101 -97 25 -4 79 -13
                            120 -21 41 -8 108 -19 148 -25 l73 -12 -3 -121 -3 -122 -165 -28 c-258 -45
                            -240 -36 -275 -142 -16 -50 -47 -124 -69 -164 -37 -71 -38 -75 -23 -106 12
                            -26 97 -148 201 -288 l20 -27 -84 -85 c-47 -47 -90 -83 -96 -81 -6 2 -80 52
                            -164 110 -84 58 -161 106 -172 106 -10 0 -49 -15 -86 -34 -38 -19 -109 -49
                            -159 -66 -54 -19 -94 -39 -98 -49 -3 -9 -20 -90 -36 -181 -17 -91 -32 -175
                            -36 -188 -5 -22 -8 -23 -126 -20 l-121 3 -18 105 c-10 58 -22 134 -28 170 -21
                            126 -20 126 -116 155 -46 14 -119 44 -161 65 -42 22 -84 40 -93 40 -9 0 -88
                            -50 -174 -110 -87 -61 -160 -110 -164 -110 -4 0 -45 38 -91 84 l-84 84 110
                            153 c60 85 113 162 116 172 4 11 -9 50 -37 106 -24 48 -54 119 -66 158 -12 39
                            -29 78 -38 86 -10 8 -97 29 -204 48 l-188 33 0 123 c0 119 1 123 23 127 12 3
                            94 17 182 31 88 15 170 33 181 40 14 9 30 40 44 86 12 40 42 112 66 161 35 69
                            42 92 35 110 -5 13 -57 91 -114 173 l-106 150 87 87 c75 76 88 86 103 75 10
                            -6 79 -57 155 -111 76 -54 146 -101 155 -103 10 -3 62 15 116 41 54 25 128 54
                            164 66 81 25 79 20 114 240 15 91 28 171 30 178 3 9 37 12 124 12 l120 0 10
                            -52z"
                            />
                            <path
                                d="M1916 2519 c-187 -31 -319 -158 -342 -328 l-7 -51 110 0 110 0 14 47
                            c18 65 72 117 138 133 142 34 261 -43 261 -168 0 -83 -30 -126 -139 -201 -103
                            -70 -162 -133 -179 -189 -7 -22 -12 -74 -12 -116 l0 -76 110 0 110 0 0 44 c0
                            104 28 144 156 228 91 59 136 106 168 170 69 141 29 321 -93 417 -100 80 -259
                            115 -405 90z"
                            />
                            <path
                                d="M1927 1406 c-48 -18 -62 -29 -81 -70 -50 -105 24 -218 143 -218 80 0
                            129 36 151 113 21 71 -28 159 -99 179 -47 13 -68 12 -114 -4z"
                            />
                        </g>
                    </svg>
                    <span
                        :class="isActive(['/faq']) ? '' : 'text-gray-500'"
                        @click="handleLinkClick('/faq')"
                        class="group-hover:-ml-1 ml-1"
                    >
                        FAQ'S
                    </span>
                    <!-- <div class="opacity-0 group-hover:opacity-100 border-2 transition-opacity duration-50  border-pink-600 relative -mt-3 -z-10 w-[60%] ml-[30px] "> </div> -->
                </Link>
            </div>
        </div>

        <div class="w-4/5 px-2 bg-white">
            <slot />
        </div>
    </div>
</template>

<script>
import NavBar from "@/Components/Navigation/NavBar.vue";
import { Link } from "@inertiajs/vue3";
export default {
    name: "SimplifyLayout",
    components: { Link, NavBar },
    data() {
        return {
            isSidebarOpen: window.innerWidth >= 768,
            isMdOrLarger: false,
            currentPath: window.location.pathname, // Initialize with current URL
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
        isActive(routePaths) {
            return routePaths.includes(this.currentPath);
            // return routePaths.some(path => this.currentPath.startsWith(path));
        },
        handleLinkClick(path) {
            this.currentPath = "/" + path.split("/").pop(); // Update the current path on click
        },
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
};
</script>

<style>
.highlightedText {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVR4nGN4brcfAAP0AeVxbIyVAAAAAElFTkSuQmCC);
    background-repeat: repeat-x;
    background-position: 0px 85%;
    background-size: 1px 25%;
}
.sidebar {
    height: 100vh;
    overflow-y: auto;
}
a:hover {
    transition: none !important;
}
</style>
