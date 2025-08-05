@assets
<meta property="og:title" content="Contact - {{ config('app.name') }}">
<meta property="og:description" content="{{ $generalSetting['website_description'] }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Contact - {{ config('app.name') }}">
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
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Let's Work Together</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Punya proyek menarik? Mari berdiskusi tentang bagaimana saya bisa membantu mewujudkan visi Anda.
            </p>
        </div>
    </header>
    <!-- Contact Section -->
    <section class="px-4 sm:px-6 lg:px-8 pb-16">
        <div class="max-w-7xl mx-auto">
            <div class="">
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
                                    <p class="text-gray-600 dark:text-gray-400">{{ $generalSetting['person_email'] }}
                                    </p>
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
                                    <p class="text-gray-600 dark:text-gray-400">{{ $generalSetting['person_location'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-semibold mb-6">Follow Me</h2>

                        <div class="space-y-4">
                            @forelse ($socials as $social)
                                <a href="{{ $social->url }}"
                                    class="flex items-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                    <img src="{{ asset('storage/' . $social->image) }}" alt="{{ $social->name }}"
                                        class="w-6 h-6 text-gray-700 dark:text-gray-300 rounded-full" />
                                    <div class="ml-4">
                                        <h3 class="font-medium">{{ $social->name }}</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $social->username }}</p>
                                    </div>
                                </a>
                            @empty
                                <p class="text-sm text-gray-600 dark:text-gray-400">No social links available.</p>
                            @endforelse
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
                @forelse ($faqs as $faq)
                    <div x-data="{ open: false }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <button x-on:click="open = !open"
                            class="w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="font-medium">{{ $faq->question }}</span>
                            <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': open }" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="px-6 pb-4">
                            <p class="text-gray-600 dark:text-gray-400">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-gray-600 dark:text-gray-400 text-center">No FAQs available.</p>
                @endforelse
            </div>
        </div>
    </section>
</div>