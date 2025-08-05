<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($data['title']);
        $data['excerpt'] = Str::limit(strip_tags($data['content']), 100);
        $data['content'] = str($data['content'])->replace('<pre>', '<pre class="language-any">');

        return $data;
    }
}
