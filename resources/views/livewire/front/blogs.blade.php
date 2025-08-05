@assets
<meta property="og:title" content="Blog - {{ config('app.name') }}">
<meta property="og:description" content="{{ $generalSetting['website_description'] }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Blog - {{ config('app.name') }}">
<meta name="twitter:description" content="{{ $generalSetting['website_description'] }}">
<link rel="icon" type="image/x-icon"
    href="{{ $generalSetting['icon'] ? asset('storage/' . $generalSetting['icon']) : '' }}">
@endassets
<x-slot name="socials">
    <x-social-footer :socials="$socials" />
</x-slot>
<x-slot name="web_description">
    {{ $generalSetting['website_description'] }}
</x-slot>
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
                            <input type="text" id="search" wire:model.live.debounce.300ms="search"
                                placeholder="Cari judul atau konten..."
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
                        <select id="category" wire:model.live="category_slug"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="all">Semua Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->slug }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="px-4 sm:px-6 lg:px-8 pb-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse ($posts->items() as $post)
                    <div>
                        <article
                            class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex flex-col min-h-full">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                class="w-full h-48 object-cover">
                            <div class="p-6 flex flex-col flex-grow">
                                <div
                                    class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-400 mb-2">
                                    <span class="capitalize">{{ $post->category->name }}</span>
                                </div>
                                <h3 class="text-xl font-semibold mb-2 line-clamp-2">{{ $post->title }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach ($post->tags as $tag)
                                        <span
                                            class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded-full">{{ $tag }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('blog-detail', $post->slug) }}" wire:navigate
                                    class="text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                                    Baca selengkapnya →
                                </a>
                            </div>
                        </article>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full text-center py-12">
                        <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.5-.811-6.223-2.167M15 6a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">Tidak ada artikel
                            ditemukan
                        </h3>
                        <p class="text-gray-400 dark:text-gray-500">Coba ubah kata pencarian atau filter kategori
                            Anda.</p>
                    </div>
                @endforelse
            </div>
            <div class="flex justify-center mt-12 col-span-full">
                <!-- Pagination -->
                {{ $posts->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </section>
</div>