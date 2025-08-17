<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Summary of ProjectChallenge
 *
 * @property int $id
 * @property int $project_id
 * @property string $title
 * @property string $description
 * @property string $solution
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class ProjectChallenge extends Model
{
    //
}
