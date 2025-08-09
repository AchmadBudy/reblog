<x-filament-panels::page>
    <x-filament::section>

        <x-filament::grid default="1" md="3" lg="3" class="gap-4">
            @foreach ($files as $file)
                <div class="rounded-lg shadow-md overflow-hidden bg-white dark:bg-gray-800">

                    <div class="w-48 h-48 bg-gray-100 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
                        @php $ext = strtolower(pathinfo($file['path'], PATHINFO_EXTENSION)); @endphp
                        @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif']))
                            <img src="{{ asset('storage/' . $file['path']) }}" alt="Preview" class="h-12 w-12 object-cover">
                        @else
                            <x-heroicon-o-document class="h-12 w-12 text-gray-500 dark:text-gray-300" />
                        @endif
                    </div>

                    <div class="p-2">
                        <p class="text-sm text-gray-700 dark:text-gray-300 truncate">
                            {{ basename($file['path']) }}
                        </p>
                        <div class="mt-2 flex justify-end">
                            <button wire:click="deleteFile('{{ $file['path'] }}')"
                                class="text-red-500 hover:text-red-700 dark:hover:text-red-400">
                                <x-heroicon-o-trash class="h-5 w-5" />
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </x-filament::grid>



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
                    <button wire:click="changePage({{ $currentPage - 1 }})"
                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <span class="sr-only">Previous</span>
                        <!-- Heroicon name: solid/chevron-left -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        </a>
                @endif

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <button wire:click="changePage({{ $i }})"
                            class="{{ $i == $currentPage ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600 dark:bg-indigo-900 dark:border-indigo-600 dark:text-indigo-200' : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700' }} relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            {{ $i }}
                        </button>
                    @endfor

                    @if ($hasMorePages)
                        <button wire:click="changePage({{ $currentPage + 1 }})"
                            class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            </a>
                    @endif
            </nav>
        </div>
    </x-filament::section>
</x-filament-panels::page>