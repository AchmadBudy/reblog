<?php

declare(strict_types=1);

namespace App\Livewire\Front;

use App\Models\Project;
use App\Models\Social;
use App\Settings\GeneralSetting;
use Illuminate\Support\Collection;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public ?string $search = '';

    public Collection $socials;

    public Collection $generalSetting;

    public function mount(GeneralSetting $generalSetting): void
    {
        $this->generalSetting = $generalSetting->toCollection();
        $this->socials = Social::query()
            ->latest()
            ->get();
    }

    #[Title('Projects')]
    public function render()
    {
        $projects = Project::query()
            ->select('id', 'name', 'main_image', 'slug', 'preview_description', 'tech_stack', 'created_at', 'status', 'live_demo', 'source_code')
            ->when($this->search, function ($query): void {
                $query->whereLike('name', '%'.$this->search.'%');
            })
            ->latest()
            ->paginate(9);

        return view('livewire.front.projects', [
            'projects' => $projects,
        ]);
    }
}
