<?php

namespace App\Livewire\Front;

use App\Models\Post;
use App\Models\Project;
use App\Models\Social;
use App\Models\TechStack;
use App\Settings\GeneralSetting;
use Illuminate\Support\Collection;
use Livewire\Component;

class Home extends Component
{
    public Collection $posts;

    public Collection $projects;

    public Collection $socials;

    public Collection $techStacks;

    public Collection $generalSetting;

    public function mount(GeneralSetting $generalSetting)
    {
        $this->generalSetting = $generalSetting->toCollection();
        $this->posts = Post::query()
            ->select('id', 'title', 'slug', 'excerpt', 'image', 'tags', 'category_id')
            ->latest()
            ->limit(3)
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->get();
        $this->projects = Project::query()
            ->select('id', 'name', 'main_image', 'slug', 'preview_description', 'tech_stack', 'created_at', 'status', 'live_demo', 'source_code')
            ->latest()
            ->limit(2)
            ->get();
        $this->socials = Social::query()
            ->latest()
            ->get();
        $this->techStacks = TechStack::query()
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.front.home');
    }
}
