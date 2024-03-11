<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    /**
     * Get the post that owns the comment.
     */
    public function meow(): BelongsTo
    {
        return $this->belongsTo(Meow::class);
    }
}
