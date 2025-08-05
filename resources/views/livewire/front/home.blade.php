@assets
<meta property="og:title" content="{{ $generalSetting['person_name'] }} - {{ $generalSetting['person_title'] }}">
<meta property="og:description" content="{{ $generalSetting['website_description'] }}">
<meta property="og:image" content="{{ asset('storage/' . $generalSetting['person_avatar']) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $generalSetting['person_name'] }} - {{ $generalSetting['person_title'] }}">
<meta name="twitter:description" content="{{ $generalSetting['website_description'] }}">
<meta name="twitter:image" content="{{ asset('storage/' . $generalSetting['person_avatar']) }}">
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
    <!-- Hero Section -->
    <section class="pt-20 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center animate-fade-in">
                <img src="{{ asset('storage/' . $generalSetting['person_avatar']) }}"
                    alt="{{ $generalSetting['person_name'] }}" class="w-32 h-32 rounded-full mx-auto mb-6 ring-4 ring-indigo-500">
                <h1
                    class="text-4xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    {{ $generalSetting['person_name'] }}
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-400 mb-8">
                    {{ $generalSetting['person_title'] }}   
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300 max-w-2xl mx-auto mb-8">
                    {{ $generalSetting['person_bio'] }}
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('projects') }}" wire:navigate
                        class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors">
                        Lihat Project
                    </a>
                    <a href="{{ route('contact') }}" wire:navigate
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
                @forelse ($techStacks as $techStack)
                    <div class="animate-slide-up">
                        <div><img src="{{ asset('storage/' . $techStack->image) }}"
                                alt="{{ $techStack->name }}" class="w-16 h-16 mx-auto"></div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $techStack->name }}</p>
                    </div>
                @empty
                    <p class="text-sm text-gray-600 dark:text-gray-400">No tech stack found</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Featured Blog Posts -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Blog Terbaru</h2>
                <a href="{{ route('blogs') }}" wire:navigate
                    class="text-indigo-600 dark:text-indigo-400 hover:underline">Lihat
                    semua →</a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @forelse ($posts as $post)
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
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-16 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Project Unggulan</h2>
                <a href="{{ route('projects') }}" wire:navigate
                    class="text-indigo-600 dark:text-indigo-400 hover:underline">Lihat
                    semua
                    →</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                @forelse ($projects as $project)
                    <div
                        class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="relative group">
                            <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->name }}"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center opacity-0 group-hover:opacity-100">
                                <div class="text-center text-white">
                                    <a href="{{ route('project-detail', $project->slug) }}" wire:navigate
                                        class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors mb-2">
                                        Detail Project
                                    </a>
                                    <div class="flex justify-center space-x-4">
                                        @if ($project->live_demo)
                                            <a href="{{ $project->live_demo }}"
                                                class="text-white hover:text-indigo-300 transition-colors">Demo →</a>
                                        @endif
                                        @if ($project->source_code)
                                            <a href="{{ $project->source_code }}"
                                                class="text-white hover:text-indigo-300 transition-colors">GitHub →</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $project->name }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                                {{ $project->preview_description }}
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach ($project->tech_stack as $tech)
                                    <span
                                        class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded-full">{{ $tech }}</span>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-400">
                                <span> {{ $project->created_at->format('F Y') }} </span>
                                <span class="capitalize">{{$project->status->getLabel()}}</span>
                            </div>
                        </div>
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
                        <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">Tidak ada project
                            yang sesuai
                        </h3>
                        <p class="text-gray-400 dark:text-gray-500">Coba ubah kata pencarian Anda.</p>
                    </div>
                @endforelse
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
            <a href="{{ route('contact') }}" wire:navigate
                class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-700 transition-colors inline-block">
                Hubungi Saya
            </a>
        </div>
    </section>


</div>