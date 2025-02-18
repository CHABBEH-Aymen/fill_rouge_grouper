<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\GroupeType;

class Groups extends Model
{
    /** @use HasFactory<\Database\Factories\GroupsFactory> */
    use HasFactory;

    public function groupeType(): HasOne
    {
        return $this->hasOne(GroupeType::class);
    }

    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }
}
