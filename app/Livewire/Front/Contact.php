<?php

declare(strict_types=1);

namespace App\Livewire\Front;

use App\Models\Faq;
use App\Models\Social;
use App\Settings\GeneralSetting;
use Illuminate\Support\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{
    public Collection $socials;

    public Collection $faqs;

    public Collection $generalSetting;

    #[Title('Contact')]
    public function mount(GeneralSetting $generalSetting): void
    {
        $this->generalSetting = $generalSetting->toCollection();
        $this->socials = Social::query()
            ->latest()
            ->get();
        $this->faqs = Faq::query()
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.front.contact');
    }
}
