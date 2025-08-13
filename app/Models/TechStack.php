<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Observers\TechStackObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

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
