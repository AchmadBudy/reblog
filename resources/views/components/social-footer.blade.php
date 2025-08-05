@props(['socials' => '[]'])
<div class="flex space-x-4">
    @foreach ($socials as $social)
        <a href="{{ $social->url }}" class="text-gray-400 hover:text-white transition-colors">
            {{ $social->name }}
        </a>
    @endforeach
</div>