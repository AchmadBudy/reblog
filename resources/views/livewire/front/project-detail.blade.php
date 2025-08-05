@assets
<meta property="og:title" content="{{ $project->name }}">
<meta property="og:description" content="{{ $project->preview_description }}">
<meta property="og:image" content="{{ asset('storage/' . $project->main_image) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $project->name }}">
<meta name="twitter:description" content="{{ $project->preview_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $project->main_image) }}">
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
    <!-- Project Header -->
    <header class="pt-20 pb-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <nav class="text-sm mb-4">
                <a href="{{ route('projects') }}" wire:navigate
                    class="text-indigo-600 dark:text-indigo-400 hover:underline">Portfolio</a>
                <span class="text-gray-400 mx-2">/</span>
                <span class="text-gray-600 dark:text-gray-400">{{ $project->name }}</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $project->name }}</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl">
                {{ $project->preview_description }}
            </p>

            <div class="flex flex-wrap gap-4 mt-6">
                @if($project->live_demo)
                    <a href="{{ $project->live_demo }}"
                        class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        Live Demo
                    </a>
                @endif
                @if($project->source_code)
                    <a href="{{ $project->source_code }}"
                        class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Source Code
                    </a>
                @endif
            </div>
        </div>
    </header>

    <!-- Image Gallery -->
    <section class="px-4 sm:px-6 lg:px-8 mb-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden"
                x-data="{ currentImage: '{{ $images[0] }}' }">
                <!-- Main Image -->
                <div class="aspect-video relative">
                    <img :src="currentImage" :alt="`Screenshot ${currentImage + 1}` "
                        class="w-full h-full object-cover">
                </div>

                <!-- Thumbnails -->
                <div class="flex space-x-2 p-4 overflow-x-auto">
                    @foreach($images as $image)
                        <div x-data="{
                                                                                            image: '{{ $image }}'
                                                                                        }">
                            <img :src="image" :alt="`Thumbnail {{ $loop->index }}}`" @click="currentImage = image"
                                :class="{ 'ring-2 ring-indigo-600': currentImage === image }"
                                class="w-24 h-16 object-cover rounded cursor-pointer hover:opacity-80 transition-opacity">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Project Details -->
    <section class="px-4 sm:px-6 lg:px-8 mb-16">
        <div class="max-w-7xl mx-auto">
            <div x-data="{ activeTab: 'overview' }" class="grid lg:grid-cols-3 gap-8">
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
                                    {!! str($project->description)->sanitizeHtml() !!}
                                </div>
                            </div>

                            <!-- Features Tab -->
                            <div x-show="activeTab === 'features'" x-transition>
                                <h3 class="text-2xl font-semibold mb-4">Core Features</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="space-y-4">
                                        @foreach ($project->features as $feature)
                                            <div class="flex items-start">
                                                <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <div>
                                                    <h4 class="font-semibold">{{ $feature }}</h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Tech Stack Tab -->
                            <div x-show="activeTab === 'tech'" x-transition>
                                <h3 class="text-2xl font-semibold mb-4">Technology Stack</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <ul class="space-y-2">
                                            @foreach ($project->tech_stack as $tech)
                                                <li class="flex items-center">
                                                    <span class="w-3 h-3 bg-gray-500 rounded-full mr-3"></span>
                                                    {{ $tech }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Challenges Tab -->
                            <div x-show="activeTab === 'challenges'" x-transition>
                                <h3 class="text-2xl font-semibold mb-4">Technical Challenges & Solutions</h3>
                                <div class="space-y-6">
                                    @foreach ($project->challenges as $challenge)
                                        <div class="border-l-4 border-gray-500 pl-4">
                                            <h4 class="font-semibold mb-2">{{$challenge->title}}</h4>
                                            <p class="text-gray-600 dark:text-gray-400 mb-2">
                                                {{$challenge->description}}
                                            </p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                <strong>Solution:</strong> {{$challenge->solution}}
                                            </p>
                                        </div>
                                    @endforeach
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
                                <dd class="text-sm font-medium">
                                    {{ $project->status }}
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Duration</dt>
                                <dd class="text-sm">{{ $project->durationDayText }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Team Size</dt>
                                <dd class="text-sm">
                                    {{-- {{ $project->team_size . ' ' . str()->plural('developer', $project->team_size)
                                    }} --}}
                                    {{ $project->teamSizeText }}
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Technologies -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold mb-4">Technologies Used</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project->tech_stack as $tech)
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-sm rounded-full">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Other Project -->
                    @if($otherProject)
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                            <h3 class="text-lg font-semibold mb-4">Other Project</h3>
                            <div class="space-y-3">
                                <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=300&h=200&fit=crop"
                                    alt="Task Management App" class="w-full h-32 object-cover rounded-lg">
                                <h4 class="font-medium">{{$otherProject->name}}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{$otherProject->description}}</p>
                                <a href="{{route('project-detail', $otherProject->slug)}}"
                                    class="text-indigo-600 dark:text-indigo-400 text-sm font-medium hover:underline">View
                                    Project →</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>