@assets
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:description" content="{{ $post->excerpt }}">
<meta property="og:image" content="{{ asset('storage/' . $post->image) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $post->title }}">
<meta name="twitter:description" content="{{ $post->excerpt }}">
<meta name="twitter:image" content="{{ asset('storage/' . $post->image) }}">
<!-- theme prism -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism-tomorrow.min.css">
<!-- need for prism -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-jsx.min.js"></script>
<!-- end need for prism -->

<link rel="icon" type="image/x-icon"
  href="{{ $generalSetting['icon'] ? asset('storage/' . $generalSetting['icon']) : '' }}">
<style lang="scss">
  /* Custom styles for optimal reading */

  .prose-custom h2 {
    margin-top: 2em;
    margin-bottom: 1em;
  }

  .prose-custom h3 {
    margin-top: 1.5em;
    margin-bottom: 0.75em;
  }

  .prose-custom pre {
    margin: 1.5em 0;
    border-radius: 0.5rem;
    overflow-x: auto;
  }
</style>
@endassets
<x-slot name="socials">
  <x-social-footer :socials="$socials" />
</x-slot>
<x-slot name="web_description">
  {{ $generalSetting['website_description'] }}
</x-slot>
<div>
  <!-- Article Header -->
  <header
    class="pt-20 pb-8 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
    <nav class="text-sm mb-4 max-w-4xl mx-auto">
      <a href="{{ route('blogs') }}" wire:navigate class="text-indigo-600 dark:text-indigo-400 hover:underline">Blog</a>
      <span class="text-gray-400 mx-2">/</span>
      <span class="text-gray-600 dark:text-gray-400">{{ $post->title }}</span>
    </nav>
    <div class="max-w-4xl mx-auto text-center">
      <div class="mb-4">
        <span
          class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
          {{ $post->category->name }}
        </span>
      </div>
      <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">
        {{ $post->title }}
      </h1>
      <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
        {{ $post->excerpt }}
      </p>
      <div class="flex items-center justify-center space-x-4 text-sm text-gray-600 dark:text-gray-400">
        <span>{{ $post->created_at->format('d F Y') }}</span>
        <span>•</span>
        <span>By {{ $post->user->name }}</span>
      </div>
      <div class="flex flex-wrap justify-center mt-4 space-x-2">
        @foreach ($post->tags as $tag)
      <span
        class="px-3 py-1 rounded-full text-sm font-medium bg-gray-200 text-gray-700 dark:bg-gray-700 dark:text-gray-300">
        {{ $tag }}
      </span>
    @endforeach
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-4xl mx-auto">


      <!-- Article Content -->
      <article class="prose-custom">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">

          <!-- Hero Image -->
          <div class="mb-8">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
              class="w-full h-64 md:h-96 object-cover rounded-lg">
          </div>

          <!-- Introduction -->
          <section id="introduction">
            {!! str($post->content)->sanitizeHtml() !!}
          </section>
        </div>

        <!-- Navigation between posts -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mt-8">
          <div class="flex justify-between items-center">
            {{-- Sisi kiri --}}
            <div>
              @if ($previousPost)
          <a href="{{ route('blog-detail', $previousPost->slug) }}"
          class="flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 hover:underline">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          <span>Sebelumnya: {{ $previousPost->title }}</span>
          </a>
        @else
          <span class="text-gray-400">Tidak ada post sebelumnya</span>
        @endif
            </div>

            {{-- Sisi kanan --}}
            <div>
              @if ($nextPost)
          <a href="{{ route('blog-detail', $nextPost->slug) }}"
          class="flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 hover:underline">
          <span>Selanjutnya: {{ $nextPost->title }}</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
          </a>
        @else
          <span class="text-gray-400">Tidak ada post berikutnya</span>
        @endif
            </div>
          </div>
        </div>


      </article>
    </div>
  </main>
</div>