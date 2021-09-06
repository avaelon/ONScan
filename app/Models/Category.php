<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'header_image', 'is_published'];

    public function jobs()
        {
            return $this->hasMany(Project::class);
        }
}

