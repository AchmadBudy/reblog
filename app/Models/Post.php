<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $excerpt
 * @property string $content
 * @property array $tags
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 * @property-read Category $category
 * @property-read User $user
 */
#[ObservedBy([PostObserver::class])]
class Post extends Model
{
    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'tags' => 'array',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
