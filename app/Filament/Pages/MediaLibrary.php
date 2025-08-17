<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use UnitEnum;

class MediaLibrary extends Page
{
    #[Url(as: 'page')]
    public $currentPage = '';

    public Collection $files;

    public int $perPage = 3;

    public bool $hasMorePages = false;

    public bool $hasPreviousPages = false;

    public int $totalPages = 0;

    protected static string|UnitEnum|null $navigationGroup = 'Post Management';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-arrow-right-circle';

    protected string $view = 'filament.pages.media-library';

    public function mount(): void
    {
        if (empty($this->currentPage)) {
            $this->currentPage = 1;
        }

        $allFiles = collect(Storage::disk('public')->files('posts/content'))
            ->map(fn ($file): array => [
                'path' => $file,
            ]);

        $this->totalPages = (int) ceil($allFiles->count() / $this->perPage);
        $this->hasMorePages = $this->totalPages > $this->currentPage;
        $this->hasPreviousPages = $this->currentPage > 1;
        $this->files = $allFiles->forPage($this->currentPage, $this->perPage);
    }

    public function changePage($page): void
    {
        $this->currentPage = $page;
        $this->mount(); // Re-run mount to re-calculate pagination and filter files
    }

    public function deleteFile($filePath): void
    {
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
            Notification::make()
                ->title('File deleted successfully')
                ->success()
                ->send();
            $this->mount(); // Refresh the file list after deletion
        }
    }
}
