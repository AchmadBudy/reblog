<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Observers\SocialObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

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
