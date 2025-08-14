<x-filament-panels::page>
    <x-filament::section>

        {{-- ganti x-filament::grid ke Tailwind v4 grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach ($files as $file)
                <div class="group relative overflow-hidden rounded-md border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 focus-within:ring-2 focus-within:ring-indigo-500 hover:ring-2 hover:ring-indigo-500 transition"
                    tabindex="0">
                    {{-- Thumb kotak 1:1 ala WordPress (≈150px) --}}
                    <div class="relative aspect-square min-h-[150px] bg-gray-50 dark:bg-gray-800">
                        @php $ext = strtolower(pathinfo($file['path'], PATHINFO_EXTENSION)); @endphp

                        @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif']))
                            <img src="{{ asset('storage/' . $file['path']) }}" alt="Preview"
                                class="absolute inset-0 h-full w-full object-cover" loading="lazy">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center">
                                <x-heroicon-o-document class="h-12 w-12 text-gray-500 dark:text-gray-300" />
                            </div>
                        @endif

                        {{-- Tombol hapus muncul saat hover/focus --}}
                        <button wire:click="deleteFile('{{ $file['path'] }}')" type="button"
                            class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 focus:opacity-100 transition rounded-full bg-white/90 dark:bg-gray-900/90 p-1 shadow ring-1 ring-gray-200 dark:ring-gray-700 hover:bg-white dark:hover:bg-gray-900"
                            title="Hapus">
                            <x-heroicon-o-trash class="h-5 w-5 text-red-600" />
                        </button>

                        {{-- Overlay filename ala WP (muncul saat hover/focus) --}}
                        <div
                            class="absolute inset-x-0 bottom-0 px-2 py-1 text-xs text-white bg-black/45 backdrop-blur-sm truncate opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition">
                            {{ basename($file['path']) }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="mt-6 flex justify-between items-center">
            <div>
                <p class="text-sm text-gray-700 dark:text-gray-300 dark:text-white">
                    Showing
                    <span class="font-medium">{{ (($currentPage - 1) * $perPage) + 1 }}</span>
                    to
                    <span class="font-medium">{{ (($currentPage - 1) * $perPage) + $files->count() }}</span>
                    of
                    <span class="font-medium">{{ $files->count() }}</span>
                    results
                </p>
            </div>

            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                @if ($hasPreviousPages)
                    <button wire:click="changePage({{ $currentPage - 1 }})" type="button"
                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                @endif

                @for ($i = 1; $i <= $totalPages; $i++)
                            <button wire:click="changePage({{ $i }})" type="button"
                                class="{{ $i == $currentPage
                    ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600 dark:bg-indigo-900 dark:border-indigo-600 dark:text-indigo-200'
                    : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700'
                                                            }} relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                {{ $i }}
                            </button>
                @endfor

                @if ($hasMorePages)
                    <button wire:click="changePage({{ $currentPage + 1 }})" type="button"
                        class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                @endif
            </nav>
        </div>
    </x-filament::section>
</x-filament-panels::page>