<div>
    <!-- Header -->
    <header class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Kumpulan artikel teknologi, tutorial programming, dan insight dari pengalaman saya sebagai developer.
            </p>
        </div>
    </header>

    <!-- Search and Filter Section -->
    <section class="px-4 sm:px-6 lg:px-8 mb-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Search -->
                    <div>
                        <label for="search" class="block text-sm font-medium mb-2">Cari artikel</label>
                        <div class="relative">
                            <input type="text" id="search" x-model="search" placeholder="Cari judul atau konten..."
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Category Filter -->
                    <div>
                        <label for="category" class="block text-sm font-medium mb-2">Kategori</label>
                        <select id="category" x-model="selectedCategory"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="all">Semua Kategori</option>
                            <option value="react">React</option>
                            <option value="nodejs">Node.js</option>
                            <option value="typescript">TypeScript</option>
                            <option value="javascript">JavaScript</option>
                            <option value="database">Database</option>
                            <option value="devops">DevOps</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="px-4 sm:px-6 lg:px-8 pb-16">
        <div class="max-w-7xl mx-auto">
            <div x-data="{ 
                posts: [
                    {
                        id: 1,
                        title: 'React Hooks Best Practices untuk Performa Maksimal',
                        excerpt: 'Pelajari cara menggunakan React Hooks secara efisien untuk meningkatkan performa aplikasi React Anda. Kita akan membahas useMemo, useCallback, dan custom hooks.',
                        category: 'react',
                        readTime: '5 min read',
                        date: '2024-01-15',
                        image: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=200&fit=crop',
                        tags: ['React', 'Performance', 'JavaScript']
                    },
                    {
                        id: 2,
                        title: 'Optimasi Performa Node.js: Tips dan Trik Terbaik',
                        excerpt: 'Panduan komprehensif untuk mengoptimalkan performa aplikasi Node.js Anda dengan teknik-teknik terbaru termasuk clustering dan caching.',
                        category: 'nodejs',
                        readTime: '8 min read',
                        date: '2024-01-12',
                        image: 'https://images.unsplash.com/photo-1627398242454-45a1465c2479?w=400&h=200&fit=crop',
                        tags: ['Node.js', 'Performance', 'Backend']
                    },
                    {
                        id: 3,
                        title: 'TypeScript Tips untuk Developer JavaScript',
                        excerpt: 'Transisi dari JavaScript ke TypeScript dengan tips dan best practices yang akan membuat kode Anda lebih maintainable dan type-safe.',
                        category: 'typescript',
                        readTime: '6 min read',
                        date: '2024-01-10',
                        image: 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=400&h=200&fit=crop',
                        tags: ['TypeScript', 'JavaScript', 'Best Practices']
                    },
                    {
                        id: 4,
                        title: 'PostgreSQL vs MongoDB: Mana yang Lebih Baik?',
                        excerpt: 'Perbandingan mendalam antara PostgreSQL dan MongoDB untuk membantu Anda memilih database yang tepat untuk proyek Anda.',
                        category: 'database',
                        readTime: '10 min read',
                        date: '2024-01-08',
                        image: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=200&fit=crop',
                        tags: ['Database', 'PostgreSQL', 'MongoDB']
                    },
                    {
                        id: 5,
                        title: 'Docker untuk Developer JavaScript',
                        excerpt: 'Panduan lengkap menggunakan Docker untuk containerize aplikasi Node.js dan React dengan best practices.',
                        category: 'devops',
                        readTime: '12 min read',
                        date: '2024-01-05',
                        image: 'https://images.unsplash.com/photo-1605745341112-85968b19335b?w=400&h=200&fit=crop',
                        tags: ['Docker', 'DevOps', 'JavaScript']
                    },
                    {
                        id: 6,
                        title: 'Modern JavaScript Features yang Wajib Diketahui',
                        excerpt: 'Eksplorasi fitur-fitur JavaScript modern seperti optional chaining, nullish coalescing, dan top-level await.',
                        category: 'javascript',
                        readTime: '7 min read',
                        date: '2024-01-03',
                        image: 'https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?w=400&h=200&fit=crop',
                        tags: ['JavaScript', 'ES2023', 'Modern JS']
                    },
                    {
                        id: 7,
                        title: 'Microservices Architecture: Panduan Lengkap',
                        excerpt: 'Panduan komprehensif untuk membangun aplikasi microservices dengan Node.js dan Docker.',
                        category: 'nodejs',
                        readTime: '15 min read',
                        date: '2024-01-01',
                        image: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=200&fit=crop',
                        tags: ['Microservices', 'Node.js', 'Architecture']
                    },
                    {
                        id: 8,
                        title: 'React Server Components: Masa Depan React',
                        excerpt: 'Eksplorasi React Server Components dan bagaimana teknologi ini mengubah cara kita membangun aplikasi React.',
                        category: 'react',
                        readTime: '8 min read',
                        date: '2023-12-28',
                        image: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=200&fit=crop',
                        tags: ['React', 'Server Components', 'Next.js']
                    }
                ],
                currentPage: 1,
                postsPerPage: 6,
                get filteredPosts() {
                    return this.posts
                },
                get totalPages() {
                    return this.posts.length
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
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                },
                nextPage() {
                    if (this.hasNextPage) {
                        this.currentPage++;
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                },
                goToPage(page) {
                    this.currentPage = page;
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            }" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <template x-for="post in filteredPosts" :key="post.id">
                    <article
                        class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <img :src="post.image" :alt="post.title" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div
                                class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-400 mb-2">
                                <span class="capitalize" x-text="post.category"></span>
                                <span x-text="post.readTime"></span>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 line-clamp-2" x-text="post.title"></h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3" x-text="post.excerpt"></p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <template x-for="tag in post.tags" :key="tag">
                                    <span
                                        class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded-full"
                                        x-text="tag"></span>
                                </template>
                            </div>
                            <a :href="`blog-detail.html?id=${post.id}`"
                                class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                                Baca selengkapnya →
                            </a>
                        </div>
                    </article>
                </template>

                <!-- Empty State -->
                <div x-show="filteredPosts.length === 0" class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.5-.811-6.223-2.167M15 6a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">Tidak ada artikel ditemukan
                    </h3>
                    <p class="text-gray-400 dark:text-gray-500">Coba ubah kata pencarian atau filter kategori Anda.</p>
                </div>

                <!-- Pagination -->
                <div x-show="totalPages > 1" class="flex justify-center mt-12 col-span-full">
                    <nav class="flex items-center space-x-2" aria-label="Pagination">
                        <!-- Previous Button -->
                        <button :disabled="!hasPrevPage"
                            class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <!-- Page Numbers -->
                        <template x-for="page in totalPages">
                            <button
                                :class="{ 'bg-indigo-600 text-white': currentPage === page, 'bg-white text-gray-500 hover:bg-gray-50': currentPage !== page }"
                                class="px-4 py-2 text-sm font-medium border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700"
                                x-text="page">
                            </button>
                        </template>

                        <!-- Next Button -->
                        <button :disabled="!hasNextPage"
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