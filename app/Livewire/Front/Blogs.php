<?php

namespace App\Livewire\Front;

use App\Models\Category;
use App\Models\Post;
use App\Models\Social;
use App\Settings\GeneralSetting;
use Illuminate\Support\Collection;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public ?string $search = '';

    #[Url(as: 'category')]
    public ?string $category_slug = '';

    public Collection $socials;

    public Collection $generalSetting;

    public function mount(GeneralSetting $generalSetting)
    {
        $this->generalSetting = $generalSetting->toCollection();
        $this->socials = Social::query()
            ->latest()
            ->get();
    }

    #[Title('Blogs')]
    public function render()
    {
        $posts = Post::query()
            ->select('id', 'title', 'slug', 'excerpt', 'image', 'tags', 'category_id')
            ->when($this->search, function ($query) {
                $query->whereLike('title', '%'.$this->search.'%');
            })
            ->when($this->category_slug, function ($query) {
                if ($this->category_slug !== 'all') {
                    $query->whereHas('category', function ($query) {
                        $query->where('slug', $this->category_slug);
                    });
                }
            })
            ->with(['category' => function ($query) {
                $query->select('id', 'name');
            }])
            ->latest()
            ->paginate(9);
        $categories = Category::query()
            ->select('id', 'name', 'slug')
            ->get();

        return view('livewire.front.blogs', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
