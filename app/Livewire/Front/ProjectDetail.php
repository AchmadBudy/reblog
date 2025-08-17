<?php

declare(strict_types=1);

namespace App\Livewire\Front;

use App\Models\Project;
use App\Models\Social;
use App\Settings\GeneralSetting;
use Illuminate\Support\Collection;
use Livewire\Component;

class ProjectDetail extends Component
{
    public Project $project;

    public ?Project $otherProject = null;

    public Collection $socials;

    public Collection $generalSetting;

    public function mount(GeneralSetting $generalSetting): void
    {
        $this->generalSetting = $generalSetting->toCollection();
        $this->project->load(['challenges']);
        $this->otherProject = Project::where('id', '!=', $this->project->id)
            ->select('name', 'main_image', 'slug')
            ->inRandomOrder()
            ->first();
        $this->socials = Social::query()
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.front.project-detail', [
            'images' => $this->getImages(),
        ])
            ->title($this->project->name);
    }

    public function getImages(): array
    {
        return [
            asset('storage/'.$this->project->main_image),
            ...($this->project->galleries ? array_map(fn ($image) => asset('storage/'.$image), $this->project->galleries) : []),
        ];
    }
}
