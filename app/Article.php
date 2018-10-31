<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Article extends Model
{

    public function author(): Relations\BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function tags(): Relations\HasMany
    {
        return $this->hasMany(Tag::class);
    }

}
