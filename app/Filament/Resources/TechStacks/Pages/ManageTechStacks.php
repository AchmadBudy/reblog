<?php

namespace App\Filament\Resources\TechStacks\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\TechStacks\TechStackResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTechStacks extends ManageRecords
{
    protected static string $resource = TechStackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
