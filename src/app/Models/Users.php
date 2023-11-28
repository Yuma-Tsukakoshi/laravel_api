<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Users extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Events::class);
    }
}
