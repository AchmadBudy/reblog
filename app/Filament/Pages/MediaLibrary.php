<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;

class MediaLibrary extends Page
{
    protected static ?string $navigationGroup = 'Post Management';

    protected static ?string $navigationIcon = 'heroicon-o-arrow-right-circle';

    protected static string $view = 'filament.pages.media-library';

    #[Url(as: 'page')]
    public $currentPage = '';

    public Collection $files;

    public int $perPage = 3;

    public bool $hasMorePages = false;

    public bool $hasPreviousPages = false;

    public int $totalPages = 0;

    public function mount()
    {
        if (empty($this->currentPage)) {
            $this->currentPage = 1;
        }

        $allFiles = collect(Storage::disk('public')->files('posts/content'))
            ->map(function ($file) {
                return [
                    'path' => $file,
                ];
            });

        $this->totalPages = ceil($allFiles->count() / $this->perPage);
        $this->hasMorePages = $this->totalPages > $this->currentPage;
        $this->hasPreviousPages = $this->currentPage > 1;
        $this->files = $allFiles->forPage($this->currentPage, $this->perPage);
    }

    public function changePage($page)
    {
        $this->currentPage = $page;
        $this->mount(); // Re-run mount to re-calculate pagination and filter files
    }

    public function deleteFile($filePath)
    {
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
            $this->mount(); // Refresh the file list after deletion
        }
    }
}
