<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\ProjectStatusEnum;
use App\Observers\ProjectObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Summary of Project
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $main_image
 * @property array $galleries
 * @property string $preview_description
 * @property string $description
 * @property array $tech_stack
 * @property array $features
 * @property string|null $live_demo
 * @property string|null $source_code
 * @property string $status
 * @property int $duration_days
 * @property int $team_size
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
#[ObservedBy([ProjectObserver::class])]
class Project extends Model
{
    use SoftDeletes;

    public function challenges(): HasMany
    {
        return $this->hasMany(ProjectChallenge::class);
    }

    protected function casts(): array
    {
        return [
            'tech_stack' => 'array',
            'features' => 'array',
            'galleries' => 'array',
            'status' => ProjectStatusEnum::class,
        ];
    }

    protected function teamSizeText(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes): string => $attributes['team_size'].' '.Str::plural('Developer', $attributes['team_size']),
        );
    }

    protected function durationDayText(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes): string => $this->convertDaysToText($attributes['duration_days']),
        );
    }

    protected function convertDaysToText(?string $days): string
    {
        $hasil = '';
        if ($days >= 365) {
            $year = (int) ($days / 365);
            $hasil .= $year.' year ';
            $days %= 365;
        }

        if ($days >= 30) {
            $month = (int) ($days / 30);
            $hasil .= $month.' month ';
            $days %= 30;
        }

        if ($days > 0) {
            $hasil .= $days.' day ';
        }

        return $hasil;
    }
}
