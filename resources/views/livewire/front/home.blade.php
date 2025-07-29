<div>
    <!-- Hero Section -->
    <section class="pt-20 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center animate-fade-in">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face"
                    alt="John Doe" class="w-32 h-32 rounded-full mx-auto mb-6 ring-4 ring-indigo-500">
                <h1
                    class="text-4xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    John Doe
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-400 mb-8">
                    Full Stack Developer & Technical Writer
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300 max-w-2xl mx-auto mb-8">
                    Saya adalah pengembang full-stack dengan passion dalam membangun aplikasi web modern menggunakan
                    teknologi terkini.
                    Saya percaya bahwa kode yang baik adalah kode yang mudah dipahami dan dipelihara.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="Project-list.html"
                        class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors">
                        Lihat Project
                    </a>
                    <a href="contact.html"
                        class="border border-gray-300 dark:border-gray-600 px-6 py-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-16 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Tech Stack</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 text-center">
                <div class="animate-slide-up">
                    <div class="text-4xl mb-2">⚛️</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">React</p>
                </div>
                <div class="animate-slide-up" style="animation-delay: 0.1s">
                    <div class="text-4xl mb-2">🟢</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Node.js</p>
                </div>
                <div class="animate-slide-up" style="animation-delay: 0.2s">
                    <div class="text-4xl mb-2">🎨</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Tailwind</p>
                </div>
                <div class="animate-slide-up" style="animation-delay: 0.3s">
                    <div class="text-4xl mb-2">🐘</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">PostgreSQL</p>
                </div>
                <div class="animate-slide-up" style="animation-delay: 0.4s">
                    <div class="text-4xl mb-2">🔥</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Firebase</p>
                </div>
                <div class="animate-slide-up" style="animation-delay: 0.5s">
                    <div class="text-4xl mb-2">☁️</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">AWS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Blog Posts -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Blog Terbaru</h2>
                <a href="blog-list.html" class="text-indigo-600 dark:text-indigo-400 hover:underline">Lihat semua →</a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=200&fit=crop"
                        alt="React Hooks Best Practices" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-2">
                            <span>React</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">React Hooks Best Practices untuk Performa Maksimal</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                            Pelajari cara menggunakan React Hooks secara efisien untuk meningkatkan performa aplikasi
                            React Anda.
                        </p>
                        <a href="blog-detail.html?id=1"
                            class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                            Baca selengkapnya →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?w=400&h=200&fit=crop"
                        alt="Node.js Performance" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-2">
                            <span>Node.js</span>
                            <span class="mx-2">•</span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Optimasi Performa Node.js: Tips dan Trik Terbaik</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                            Panduan komprehensif untuk mengoptimalkan performa aplikasi Node.js Anda dengan
                            teknik-teknik terbaru.
                        </p>
                        <a href="blog-detail.html?id=2"
                            class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                            Baca selengkapnya →
                        </a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=400&h=200&fit=crop"
                        alt="TypeScript Tips" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-2">
                            <span>TypeScript</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">TypeScript Tips untuk Developer JavaScript</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                            Transisi dari JavaScript ke TypeScript dengan tips dan best practices yang akan membuat kode
                            Anda lebih maintainable.
                        </p>
                        <a href="blog-detail.html?id=3"
                            class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                            Baca selengkapnya →
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-16 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Project Unggulan</h2>
                <a href="Project-list.html" class="text-indigo-600 dark:text-indigo-400 hover:underline">Lihat semua
                    →</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Project 1 -->
                <div
                    class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=300&fit=crop"
                        alt="E-commerce Platform" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">E-commerce Platform Modern</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Platform e-commerce lengkap dengan fitur real-time inventory, payment gateway, dan admin
                            dashboard.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-sm rounded-full">React</span>
                            <span
                                class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-sm rounded-full">Node.js</span>
                            <span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">PostgreSQL</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="Project-detail.html?id=1"
                                class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                                Detail Project
                            </a>
                            <a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                Demo →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div
                    class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=600&h=300&fit=crop"
                        alt="Task Management App" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">Task Management App</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Aplikasi manajemen tugas tim dengan real-time collaboration, drag & drop, dan notifikasi.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-sm rounded-full">Vue.js</span>
                            <span
                                class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-sm rounded-full">Firebase</span>
                            <span
                                class="px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 text-sm rounded-full">Tailwind</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="Project-detail.html?id=2"
                                class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                                Detail Project
                            </a>
                            <a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                Demo →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Mari Bekerja Bersama</h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">
                Punya proyek menarik? Saya selalu terbuka untuk kolaborasi dan diskusi.
            </p>
            <a href="contact.html"
                class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-700 transition-colors inline-block">
                Hubungi Saya
            </a>
        </div>
    </section>


</div>