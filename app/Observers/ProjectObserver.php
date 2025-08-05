<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        // check if image is updated
        if ($project->isDirty('main_image')) {
            // delete old image
            if (Storage::disk('public')->exists($project->getOriginal('main_image'))) {
                Storage::disk('public')->delete($project->getOriginal('main_image'));
            }
        }

        // check if galleries are updated
        if ($project->isDirty('galleries')) {
            $needToRemove = array_diff($project->getOriginal('galleries'), $project->galleries);
            // delete old galleries
            foreach ($needToRemove as $gallery) {
                if (Storage::disk('public')->exists($gallery)) {
                    Storage::disk('public')->delete($gallery);
                }
            }
        }
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        // delete image
        if (Storage::disk('public')->exists($project->main_image)) {
            Storage::disk('public')->delete($project->main_image);
        }
        // delete galleries
        if (count($project->galleries) > 0) {
            // delete galleries
            foreach ($project->galleries as $gallery) {
                if (Storage::disk('public')->exists($gallery)) {
                    Storage::disk('public')->delete($gallery);
                }
            }
        }
    }
}
