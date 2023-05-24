<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Padlet extends Model
{

    protected $fillable = ['name', 'published', 'is_public'];
    public function isFirst() : bool {
        return $this->id = 1;
    }

    public function entries() : HasMany
    {
        return $this->hasMany(Entry::class);
    }

    /**
     * padlet belongs to many users (m:n)
     */
    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}

