<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Groupes;

class GroupeType extends Model
{
    /** @use HasFactory<\Database\Factories\GroupeTypeFactory> */
    use HasFactory;

    public function roles():BelongsToMany
    {
        return $this->belongsToMany(Groupes::class);
    } 
}
