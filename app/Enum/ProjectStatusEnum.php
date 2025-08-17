<?php

declare(strict_types=1);

namespace App\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ProjectStatusEnum: string implements HasColor, HasLabel
{
    case COMPLETED = 'completed';
    case IN_PROGRESS = 'in_progress';
    case ARCHIVED = 'archived';

    public function getLabel(): string
    {
        return match ($this) {
            self::COMPLETED => 'Completed',
            self::IN_PROGRESS => 'In Progress',
            self::ARCHIVED => 'Archived',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::COMPLETED => 'success',
            self::IN_PROGRESS => 'warning',
            self::ARCHIVED => 'danger',
        };
    }
}
