<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\TechStack;
use Illuminate\Support\Facades\Storage;

class TechStackObserver
{
    /**
     * Handle the TechStack "created" event.
     */
    public function created(TechStack $techStack): void
    {
        //
    }

    /**
     * Handle the TechStack "updated" event.
     */
    public function updated(TechStack $techStack): void
    {
        // check if image is updated
        // delete old image
        if ($techStack->isDirty('image') && Storage::disk('public')->exists($techStack->getOriginal('image'))) {
            Storage::disk('public')->delete($techStack->getOriginal('image'));
        }
    }

    /**
     * Handle the TechStack "deleted" event.
     */
    public function deleted(TechStack $techStack): void
    {
        // delete image
        if (Storage::disk('public')->exists($techStack->image)) {
            Storage::disk('public')->delete($techStack->image);
        }
    }

    /**
     * Handle the TechStack "restored" event.
     */
    public function restored(TechStack $techStack): void
    {
        //
    }

    /**
     * Handle the TechStack "force deleted" event.
     */
    public function forceDeleted(TechStack $techStack): void
    {
        //
    }
}
