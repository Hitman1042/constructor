<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'description', 'domain', 'is_published', 'theme'];

    public function blocks()
    {
        return $this->hasMany(ProjectBlock::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}