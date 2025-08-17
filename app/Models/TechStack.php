<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\TechStackObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * summary of TechStack
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
#[ObservedBy([TechStackObserver::class])]
class TechStack extends Model
{
    //
}
