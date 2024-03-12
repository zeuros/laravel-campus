<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meow extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['title', 'meowContents'];

    /**
     * Get the comments for the blog post.
     */
    public function commentaires(): HasMany
    {
        return $this->hasMany(Commentaire::class);
    }
}
