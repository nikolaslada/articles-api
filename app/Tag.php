<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

final class Tag extends Model
{

    public function article(): Relations\BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

}
