<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'badge_class',
        'slug'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
