<?php

namespace App\Observers;

use App\Models\Social;
use Illuminate\Support\Facades\Storage;

class SocialObserver
{
    /**
     * Handle the Social "created" event.
     */
    public function created(Social $social): void
    {
        //
    }

    /**
     * Handle the Social "updated" event.
     */
    public function updated(Social $social): void
    {
        // check if image is updated
        if ($social->isDirty('image')) {
            // delete old image
            if (Storage::disk('public')->exists($social->getOriginal('image'))) {
                Storage::disk('public')->delete($social->getOriginal('image'));
            }
        }
    }

    /**
     * Handle the Social "deleted" event.
     */
    public function deleted(Social $social): void
    {
        // delete image
        if (Storage::disk('public')->exists($social->image)) {
            Storage::disk('public')->delete($social->image);
        }
    }

    /**
     * Handle the Social "restored" event.
     */
    public function restored(Social $social): void
    {
        //
    }

    /**
     * Handle the Social "force deleted" event.
     */
    public function forceDeleted(Social $social): void
    {
        //
    }
}
