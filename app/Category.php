<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

final class Category extends Model
{

    public function article(): Relations\BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

}
