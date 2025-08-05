<?php

namespace App\Livewire\Front;

use App\Models\Post;
use App\Models\Social;
use App\Settings\GeneralSetting;
use Illuminate\Support\Collection;
use Livewire\Component;

class BlogDetail extends Component
{
    public Post $post;

    public ?Post $previousPost;

    public ?Post $nextPost;

    public Collection $socials;

    public Collection $generalSetting;

    public function mount(GeneralSetting $generalSetting)
    {
        $this->generalSetting = $generalSetting->toCollection();
        $this->post->load(['category', 'user']);
        $this->previousPost = Post::where('id', '<', $this->post->id)
            ->select('id', 'title', 'slug')
            ->latest()
            ->first();
        $this->nextPost = Post::where('id', '>', $this->post->id)
            ->select('id', 'title', 'slug')
            ->oldest()
            ->first();
        $this->socials = Social::query()
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.front.blog-detail')
            ->title($this->post->title);
    }
}
