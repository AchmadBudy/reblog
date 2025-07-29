<div>
        <!-- Project Header -->
    <header class="pt-20 pb-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm mb-4">
                <a href="portfolio-list.html" class="text-indigo-600 dark:text-indigo-400 hover:underline">Portfolio</a>
                <span class="text-gray-400 mx-2">/</span>
                <span class="text-gray-600 dark:text-gray-400">E-commerce Platform Modern</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">E-commerce Platform Modern</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl">
                Platform e-commerce lengkap dengan fitur real-time inventory, payment gateway integration, dan admin dashboard yang responsive untuk pengelolaan toko online.
            </p>
            
            <div class="flex flex-wrap gap-4 mt-6">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    Live Demo
                </a>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                    </svg>
                    Source Code
                </a>
            </div>
        </div>
    </header>

    <!-- Image Gallery -->
    <section class="px-4 sm:px-6 lg:px-8 mb-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <!-- Main Image -->
                <div class="aspect-video relative">
                    <img x-data="{ images: [
                        'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=1200&h=675&fit=crop',
                        'https://images.unsplash.com/photo-1559028012-481c04fa702d?w=1200&h=675&fit=crop',
                        'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&h=675&fit=crop',
                        'https://images.unsplash.com/photo-1559028006-44a36f365953?w=1200&h=675&fit=crop'
                    ] }" 
                    :src="images[currentImage]" 
                    :alt="`Screenshot ${currentImage + 1}`"
                    class="w-full h-full object-cover">
                </div>
                
                <!-- Thumbnails -->
                <div class="flex space-x-2 p-4 overflow-x-auto">
                    <template x-for="(image, index) in [
                        'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=300&h=200&fit=crop',
                        'https://images.unsplash.com/photo-1559028012-481c04fa702d?w=300&h=200&fit=crop',
                        'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=300&h=200&fit=crop',
                        'https://images.unsplash.com/photo-1559028006-44a36f365953?w=300&h=200&fit=crop'
                    ]" :key="index">
                        <img :src="image" 
                             :alt="`Thumbnail ${index + 1}`"
                             @click="currentImage = index"
                             :class="{ 'ring-2 ring-indigo-600': currentImage === index }"
                             class="w-24 h-16 object-cover rounded cursor-pointer hover:opacity-80 transition-opacity">
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Details -->
    <section class="px-4 sm:px-6 lg:px-8 mb-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Tabs -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-8">
                        <div class="border-b border-gray-200 dark:border-gray-700">
                            <nav class="flex space-x-8 px-6">
                                <button @click="activeTab = 'overview'" 
                                        :class="{ 'border-indigo-500 text-indigo-600 dark:text-indigo-400': activeTab === 'overview' }"
                                        class="py-4 px-1 border-b-2 font-medium text-sm transition-colors">
                                    Overview
                                </button>
                                <button @click="activeTab = 'features'" 
                                        :class="{ 'border-indigo-500 text-indigo-600 dark:text-indigo-400': activeTab === 'features' }"
                                        class="py-4 px-1 border-b-2 font-medium text-sm transition-colors">
                                    Features
                                </button>
                                <button @click="activeTab = 'tech'" 
                                        :class="{ 'border-indigo-500 text-indigo-600 dark:text-indigo-400': activeTab === 'tech' }"
                                        class="py-4 px-1 border-b-2 font-medium text-sm transition-colors">
                                    Tech Stack
                                </button>
                                <button @click="activeTab = 'challenges'" 
                                        :class="{ 'border-indigo-500 text-indigo-600 dark:text-indigo-400': activeTab === 'challenges' }"
                                        class="py-4 px-1 border-b-2 font-medium text-sm transition-colors">
                                    Challenges
                                </button>
                            </nav>
                        </div>

                        <div class="p-6">
                            <!-- Overview Tab -->
                            <div x-show="activeTab === 'overview'" x-transition>
                                <h3 class="text-2xl font-semibold mb-4">Project Overview</h3>
                                <div class="prose dark:prose-invert max-w-none">
                                    <p class="mb-4">
                                        E-commerce Platform Modern adalah solusi lengkap untuk bisnis online yang membutuhkan sistem penjualan yang handal dan skalabel. Platform ini dirancang dengan pendekatan mobile-first dan memberikan pengalaman belanja yang seamless untuk pelanggan.
                                    </p>
                                    <p class="mb-4">
                                        Proyek ini mencakup fitur-fitur canggih seperti real-time inventory tracking, payment gateway integration dengan berbagai provider, admin dashboard yang komprehensif, dan sistem rekomendasi produk berbasis AI.
                                    </p>
                                    <h4 class="text-xl font-semibold mt-6 mb-3">Key Achievements</h4>
                                    <ul class="list-disc list-inside space-y-2">
                                        <li>Successfully reduced page load time by 40% through optimization</li>
                                        <li>Increased conversion rate by 25% with improved UX design</li>
                                        <li>Scaled to handle 10,000+ concurrent users</li>
                                        <li>Achieved 99.9% uptime over 6 months</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Features Tab -->
                            <div x-show="activeTab === 'features'" x-transition>
                                <h3 class="text-2xl font-semibold mb-4">Core Features</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="space-y-4">
                                        <div class="flex items-start">
                                            <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold">Real-time Inventory</h4>
                                                <p class="text-gray-600 dark:text-gray-400 text-sm">Sync stock levels across all channels instantly</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold">Payment Gateway</h4>
                                                <p class="text-gray-600 dark:text-gray-400 text-sm">Multiple payment methods with secure processing</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold">Admin Dashboard</h4>
                                                <p class="text-gray-600 dark:text-gray-400 text-sm">Comprehensive analytics and order management</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-y-4">
                                        <div class="flex items-start">
                                            <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold">AI Recommendations</h4>
                                                <p class="text-gray-600 dark:text-gray-400 text-sm">Smart product suggestions based on user behavior</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold">Multi-language</h4>
                                                <p class="text-gray-600 dark:text-gray-400 text-sm">Support for 5+ languages with RTL support</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold">Mobile Responsive</h4>
                                                <p class="text-gray-600 dark:text-gray-400 text-sm">Optimized for all devices with PWA support</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tech Stack Tab -->
                            <div x-show="activeTab === 'tech'" x-transition>
                                <h3 class="text-2xl font-semibold mb-4">Technology Stack</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <h4 class="text-lg font-semibold mb-3 text-indigo-600">Frontend</h4>
                                        <ul class="space-y-2">
                                            <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            React 18 with TypeScript
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Tailwind CSS for styling
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            React Query for state management
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            React Router for navigation
                                        </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold mb-3 text-green-600">Backend</h4>
                                        <ul class="space-y-2">
                                            <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Node.js with Express
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            PostgreSQL database
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Redis for caching
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Socket.io for real-time features
                                        </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold mb-3 text-orange-600">DevOps & Deployment</h4>
                                        <ul class="space-y-2">
                                            <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Docker containerization
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            AWS EC2 & RDS
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Nginx reverse proxy
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            GitHub Actions CI/CD
                                        </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold mb-3 text-red-600">Third-party Services</h4>
                                        <ul class="space-y-2">
                                            <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Stripe payment processing
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            AWS S3 for file storage
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            SendGrid for emails
                                        </li>
                                        <li class="flex items-center">
                                            <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                            Cloudinary for image optimization
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Challenges Tab -->
                            <div x-show="activeTab === 'challenges'" x-transition>
                                <h3 class="text-2xl font-semibold mb-4">Technical Challenges & Solutions</h3>
                                <div class="space-y-6">
                                    <div class="border-l-4 border-gray-500 pl-4">
                                        <h4 class="font-semibold mb-2">Challenge 1: Real-time Inventory Sync</h4>
                                        <p class="text-gray-600 dark:text-gray-400 mb-2">
                                            Menjaga sinkronisasi stok yang akurat di berbagai channel secara real-time.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <strong>Solution:</strong> Implemented WebSocket connections with Redis pub/sub for instant updates across all connected clients.
                                        </p>
                                    </div>
                                    
                                    <div class="border-l-4 border-gray-500 pl-4">
                                        <h4 class="font-semibold mb-2">Challenge 2: Payment Security</h4>
                                        <p class="text-gray-600 dark:text-gray-400 mb-2">
                                            Memastikan keamanan transaksi dan kepatuhan terhadap PCI DSS.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <strong>Solution:</strong> Used Stripe's hosted checkout and implemented tokenization for sensitive payment data.
                                        </p>
                                    </div>

                                    <div class="border-l-4 border-gray-500 pl-4">
                                        <h4 class="font-semibold mb-2">Challenge 3: Performance Optimization</h4>
                                        <p class="text-gray-600 dark:text-gray-400 mb-2">
                                            Mengoptimalkan load time untuk pengalaman user yang optimal.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <strong>Solution:</strong> Implemented code splitting, lazy loading, and aggressive caching strategies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Project Info -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Project Info</h3>
                        <dl class="space-y-3">
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Status</dt>
                                <dd class="text-sm text-green-600 dark:text-green-400 font-medium">Completed</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Duration</dt>
                                <dd class="text-sm">3 months</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Team Size</dt>
                                <dd class="text-sm">4 developers</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Complexity</dt>
                                <dd class="text-sm text-red-600 dark:text-red-400 font-medium">High</dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Technologies -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Technologies Used</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-sm rounded-full">React</span>
                            <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-sm rounded-full">Node.js</span>
                            <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-sm rounded-full">PostgreSQL</span>
                            <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-sm rounded-full">Redis</span>
                            <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-sm rounded-full">Tailwind</span>
                            <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-sm rounded-full">Stripe</span>
                        </div>
                    </div>

                    <!-- Next Project -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Next Project</h3>
                        <div class="space-y-3">
                            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=300&h=200&fit=crop" 
                                 alt="Task Management App" 
                                 class="w-full h-32 object-cover rounded-lg">
                            <h4 class="font-medium">Task Management App</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Aplikasi manajemen tugas tim dengan real-time collaboration...</p>
                            <a href="portfolio-detail.html?id=2" class="text-indigo-600 dark:text-indigo-400 text-sm font-medium hover:underline">View Project →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
