<div>
    <!-- Header -->
    <header class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Portfolio</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Koleksi proyek yang telah saya kerjakan, dari aplikasi web hingga mobile apps dengan berbagai teknologi
                modern.
            </p>
        </div>
    </header>

    <!-- Search and Filter Section -->
    <section class="px-4 sm:px-6 lg:px-8 mb-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <div class="grid md:grid-cols-4 gap-4">
                    <!-- Search -->
                    <div class="md:col-span-2">
                        <label for="search" class="block text-sm font-medium mb-2">Cari proyek</label>
                        <div class="relative">
                            <input type="text" id="search" x-model="search" placeholder="Nama proyek atau deskripsi..."
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Tech Filter -->
                    <div>
                        <label for="tech" class="block text-sm font-medium mb-2">Teknologi</label>
                        <select id="tech" x-model="selectedTech"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="all">Semua Teknologi</option>
                            <option value="react">React</option>
                            <option value="nodejs">Node.js</option>
                            <option value="vue">Vue.js</option>
                            <option value="firebase">Firebase</option>
                            <option value="postgresql">PostgreSQL</option>
                            <option value="mongodb">MongoDB</option>
                        </select>
                    </div>

                    <!-- Sort -->
                    <div>
                        <label for="sort" class="block text-sm font-medium mb-2">Urutkan</label>
                        <select id="sort" x-model="sortBy"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="date">Tanggal</option>
                            <option value="name">Nama</option>
                            <option value="complexity">Kompleksitas</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="px-4 sm:px-6 lg:px-8 pb-16">
        <div class="max-w-7xl mx-auto">
            <div x-data="{ 
                projects: [
                    {
                        id: 1,
                        title: 'E-commerce Platform Modern',
                        description: 'Platform e-commerce lengkap dengan fitur real-time inventory, payment gateway, dan admin dashboard yang responsive.',
                        image: 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop',
                        tech: ['react', 'nodejs', 'postgresql'],
                        complexity: 'high',
                        date: '2024-01-15',
                        demo: '#',
                        github: '#',
                        features: ['Real-time inventory', 'Payment gateway', 'Admin dashboard', 'Mobile responsive']
                    },
                    {
                        id: 2,
                        title: 'Task Management App',
                        description: 'Aplikasi manajemen tugas tim dengan real-time collaboration, drag & drop, dan notifikasi push.',
                        image: 'https://images.unsplash.com/photo-1559028012-481c04fa702d?w=600&h=400&fit=crop',
                        tech: ['vue', 'firebase'],
                        complexity: 'medium',
                        date: '2024-01-10',
                        demo: '#',
                        github: '#',
                        features: ['Real-time collaboration', 'Drag & drop', 'Push notifications', 'Team management']
                    },
                    {
                        id: 3,
                        title: 'Weather Dashboard',
                        description: 'Dashboard cuaca real-time dengan prediksi 7 hari, peta interaktif, dan notifikasi cuaca ekstrem.',
                        image: 'https://images.unsplash.com/photo-1592210454359-9043f067919b?w=600&h=400&fit=crop',
                        tech: ['react', 'nodejs'],
                        complexity: 'medium',
                        date: '2024-01-05',
                        demo: '#',
                        github: '#',
                        features: ['Real-time weather', '7-day forecast', 'Interactive maps', 'Weather alerts']
                    },
                    {
                        id: 4,
                        title: 'Social Media Analytics',
                        description: 'Platform analitik media sosial dengan dashboard interaktif dan laporan performa yang komprehensif.',
                        image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop',
                        tech: ['react', 'nodejs', 'mongodb'],
                        complexity: 'high',
                        date: '2023-12-20',
                        demo: '#',
                        github: '#',
                        features: ['Interactive dashboard', 'Performance reports', 'Data visualization', 'API integration']
                    },
                    {
                        id: 5,
                        title: 'Recipe Sharing App',
                        description: 'Aplikasi berbagi resep dengan fitur bookmark, rating, dan pencarian berdasarkan bahan yang tersedia.',
                        image: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop',
                        tech: ['vue', 'firebase'],
                        complexity: 'low',
                        date: '2023-12-15',
                        demo: '#',
                        github: '#',
                        features: ['Recipe sharing', 'Bookmark', 'Rating system', 'Ingredient search']
                    },
                    {
                        id: 6,
                        title: 'Real-time Chat App',
                        description: 'Aplikasi chat real-time dengan rooms, private messaging, dan file sharing yang aman.',
                        image: 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=600&h=400&fit=crop',
                        tech: ['react', 'nodejs', 'mongodb'],
                        complexity: 'medium',
                        date: '2023-12-10',
                        demo: '#',
                        github: '#',
                        features: ['Real-time messaging', 'Private rooms', 'File sharing', 'End-to-end encryption']
                    }
                ],
                currentPage: 1,
                projectsPerPage: 6,
                get totalPages() {
                    return Math.ceil(this.filteredProjects.length / this.projectsPerPage);
                },
                get paginatedProjects() {
                    const start = (this.currentPage - 1) * this.projectsPerPage;
                    const end = start + this.projectsPerPage;
                    return this.filteredProjects.slice(start, end);
                },
                get hasPrevPage() {
                    return this.currentPage > 1;
                },
                get hasNextPage() {
                    return this.currentPage < this.totalPages;
                },
                prevPage() {
                    if (this.hasPrevPage) {
                        this.currentPage--;
                    }
                },
                nextPage() {
                    if (this.hasNextPage) {
                        this.currentPage++;
                    }
                },
                goToPage(page) {
                    this.currentPage = page;
                },
                get filteredProjects() {
                    let filtered = this.projects.filter(project => {
                        const matchesSearch = project.title.toLowerCase().includes(this.search.toLowerCase()) ||
                                            project.description.toLowerCase().includes(this.search.toLowerCase());
                        const matchesTech = this.selectedTech === 'all' || project.tech.includes(this.selectedTech);
                        return matchesSearch && matchesTech;
                    });

                    // Sort projects
                    filtered.sort((a, b) => {
                        let valueA, valueB;
                        
                        switch (this.sortBy) {
                            case 'date':
                                valueA = new Date(a.date);
                                valueB = new Date(b.date);
                                break;
                            case 'name':
                                valueA = a.title.toLowerCase();
                                valueB = b.title.toLowerCase();
                                break;
                            case 'complexity':
                                const complexityOrder = { low: 1, medium: 2, high: 3 };
                                valueA = complexityOrder[a.complexity];
                                valueB = complexityOrder[b.complexity];
                                break;
                        }

                        if (this.sortBy === 'date') {
                            return this.sortOrder === 'desc' ? valueB - valueA : valueA - valueB;
                        } else {
                            return this.sortOrder === 'desc' ? valueB.localeCompare(valueA) : valueA.localeCompare(valueB);
                        }
                    });

                    return filtered;
                }
            }" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <template x-for="project in paginatedProjects" :key="project.id">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="relative group">
                            <img :src="project.image" :alt="project.title" class="w-full h-48 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center opacity-0 group-hover:opacity-100">
                                <div class="text-center text-white">
                                    <a :href="`portfolio-detail.html?id=${project.id}`"
                                        class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors mb-2">
                                        Detail Project
                                    </a>
                                    <div class="flex justify-center space-x-4">
                                        <a :href="project.demo"
                                            class="text-white hover:text-indigo-300 transition-colors">Demo →</a>
                                        <a :href="project.github"
                                            class="text-white hover:text-indigo-300 transition-colors">GitHub →</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2" x-text="project.title"></h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3" x-text="project.description">
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <template x-for="tech in project.tech" :key="tech">
                                    <span class="px-3 py-1 text-sm rounded-full" :class="{
                                              'bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200': tech === 'react',
                                              'bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200': tech === 'nodejs',
                                              'bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200': tech === 'vue',
                                              'bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200': tech === 'firebase',
                                              'bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200': tech === 'postgresql',
                                              'bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200': tech === 'mongodb'
                                          }" x-text="tech.charAt(0).toUpperCase() + tech.slice(1)"></span>
                                </template>
                            </div>

                            <div class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-400">
                                <span
                                    x-text="new Date(project.date).toLocaleDateString('id-ID', { month: 'short', year: 'numeric' })"></span>
                                <span class="capitalize" :class="{
                                          'text-green-600': project.complexity === 'low',
                                          'text-yellow-600': project.complexity === 'medium',
                                          'text-red-600': project.complexity === 'high'
                                      }" x-text="project.complexity"></span>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- Empty State -->
                <div x-show="filteredProjects.length === 0" class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.5-.811-6.223-2.167M15 6a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">Tidak ada proyek ditemukan
                    </h3>
                    <p class="text-gray-400 dark:text-gray-500">Coba ubah kata pencarian atau filter teknologi Anda.</p>
                </div>

                <!-- Pagination -->
                <div x-show="totalPages > 1" class="flex justify-center mt-12">
                    <nav class="flex items-center space-x-2" aria-label="Pagination">
                        <!-- Previous Button -->
                        <button @click="prevPage()" :disabled="!hasPrevPage"
                            class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <!-- Page Numbers -->
                        <template x-for="page in totalPages">
                            <button @click="goToPage(page)"
                                :class="{ 'bg-indigo-600 text-white': currentPage === page, 'bg-white text-gray-500 hover:bg-gray-50': currentPage !== page }"
                                class="px-4 py-2 text-sm font-medium border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700"
                                x-text="page">
                            </button>
                        </template>

                        <!-- Next Button -->
                        <button @click="nextPage()" :disabled="!hasNextPage"
                            class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>