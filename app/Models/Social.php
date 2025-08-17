<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\SocialObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Summary of Social
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $url
 * @property string $image
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
#[ObservedBy([SocialObserver::class])]
class Social extends Model
{
    //
}
