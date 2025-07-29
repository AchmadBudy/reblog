<div>
    <!-- Header -->
    <header class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Let's Work Together</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Punya proyek menarik? Mari berdiskusi tentang bagaimana saya bisa membantu mewujudkan visi Anda.
            </p>
        </div>
    </header>
    <!-- Contact Section -->
    <section class="px-4 sm:px-6 lg:px-8 pb-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-semibold mb-6">Send Me a Message</h2>

                        <!-- Success Message -->
                        <div x-show="submitSuccess" x-transition
                            class="mb-6 p-4 bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-600 dark:text-green-400 mr-2" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-green-800 dark:text-green-200" x-text="submitMessage"></span>
                            </div>
                        </div>

                        <form @submit.prevent="submitForm" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium mb-2">Nama Lengkap</label>
                                <input type="text" id="name" x-model="formData.name"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    :class="{ 'border-red-500': errors.name }" aria-required="true">
                                <p x-show="errors.name" x-text="errors.name"
                                    class="mt-1 text-sm text-red-600 dark:text-red-400"></p>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                                <input type="email" id="email" x-model="formData.email"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    :class="{ 'border-red-500': errors.email }" aria-required="true">
                                <p x-show="errors.email" x-text="errors.email"
                                    class="mt-1 text-sm text-red-600 dark:text-red-400"></p>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium mb-2">Subjek</label>
                                <input type="text" id="subject" x-model="formData.subject"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                    :class="{ 'border-red-500': errors.subject }" aria-required="true">
                                <p x-show="errors.subject" x-text="errors.subject"
                                    class="mt-1 text-sm text-red-600 dark:text-red-400"></p>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium mb-2">Pesan</label>
                                <textarea id="message" x-model="formData.message" rows="5"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent resize-none"
                                    :class="{ 'border-red-500': errors.message }" aria-required="true"
                                    placeholder="Ceritakan tentang proyek Anda..."></textarea>
                                <p x-show="errors.message" x-text="errors.message"
                                    class="mt-1 text-sm text-red-600 dark:text-red-400"></p>
                            </div>

                            <button type="submit" :disabled="isSubmitting"
                                class="w-full px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                <span x-show="!isSubmitting">Kirim Pesan</span>
                                <span x-show="isSubmitting" class="flex items-center justify-center">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                            stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    Mengirim...
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8">
                    <!-- Contact Details -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-semibold mb-6">Get in Touch</h2>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium">Email</h3>
                                    <p class="text-gray-600 dark:text-gray-400">john.doe@example.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium">Phone</h3>
                                    <p class="text-gray-600 dark:text-gray-400">+62 812-3456-7890</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium">Location</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Jakarta, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-semibold mb-6">Follow Me</h2>

                        <div class="space-y-4">
                            <a href="#"
                                class="flex items-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 0C5.374 0 0 5.373 0 12s5.374 12 12 12 12-5.373 12-12S18.626 0 12 0zm5.848 18.849c-1.05.25-2.175.413-3.353.475.94-.563 1.667-1.453 2.009-2.513-.877.52-1.846.898-2.879 1.102-.828-.882-2.007-1.435-3.31-1.435-2.503 0-4.537 2.034-4.537 4.537 0 .356.04.702.116 1.032-3.768-.189-7.107-1.995-9.339-4.738-.39.67-.613 1.449-.613 2.278 0 1.569.798 2.954 2.011 3.764-.741-.024-1.439-.227-2.049-.568v.057c0 2.19 1.556 4.016 3.622 4.431-.38.103-.779.158-1.19.158-.29 0-.571-.028-.845-.08.576 1.797 2.247 3.104 4.228 3.141-1.55 1.214-3.499 1.938-5.618 1.938-.365 0-.724-.021-1.078-.063 2.002 1.284 4.381 2.036 6.937 2.036 8.325 0 12.878-6.9 12.878-12.879 0-.196-.005-.391-.013-.585.883-.638 1.65-1.434 2.258-2.342z" />
                                </svg>
                                <div class="ml-4">
                                    <h3 class="font-medium">Twitter</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">@johndoe_dev</p>
                                </div>
                            </a>

                            <a href="#"
                                class="flex items-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                                <div class="ml-4">
                                    <h3 class="font-medium">LinkedIn</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">John Doe</p>
                                </div>
                            </a>

                            <a href="#"
                                class="flex items-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                                <div class="ml-4">
                                    <h3 class="font-medium">GitHub</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">@johndoe</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Availability -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-semibold mb-6">Availability</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                <span class="text-sm">Available for new projects</span>
                            </div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">
                                <p>Full-time: 40 hours/week</p>
                                <p>Part-time: 20 hours/week</p>
                                <p>Contract: Project-based</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="px-4 sm:px-6 lg:px-8 pb-16">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 dark:text-gray-400">Jawaban atas pertanyaan yang sering ditanyakan</p>
            </div>

            <div class="max-w-3xl mx-auto space-y-4">
                <div x-data="{ open: false }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-medium">Apa saja teknologi yang Anda kuasai?</span>
                        <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600 dark:text-gray-400">Saya menguasai berbagai teknologi modern seperti
                            React, Vue.js, Node.js, Express, PostgreSQL, MongoDB, dan banyak lagi. Lihat detail lengkap
                            di halaman portfolio saya.</p>
                    </div>
                </div>

                <div x-data="{ open: false }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-medium">Bagaimana proses kerja dengan Anda?</span>
                        <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600 dark:text-gray-400">Proses kerja saya meliputi: 1) Analisis kebutuhan,
                            2) Perancangan UI/UX, 3) Development, 4) Testing, 5) Deployment, dan 6) Maintenance.</p>
                    </div>
                </div>

                <div x-data="{ open: false }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-medium">Berapa tarif Anda?</span>
                        <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600 dark:text-gray-400">Tarif saya fleksibel tergantung pada kompleksitas
                            proyek. Saya menawarkan opsi per jam, per proyek, atau retainer bulanan. Kontak saya untuk
                            diskusi detail.</p>
                    </div>
                </div>

                <div x-data="{ open: false }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-medium">Apakah Anda menerima remote work?</span>
                        <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600 dark:text-gray-400">Ya, saya sangat terbuka untuk remote work dan sudah
                            berpengalaman bekerja dengan tim dari berbagai negara.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>