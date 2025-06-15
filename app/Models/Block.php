<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'name', 'default_content', 'default_styles', 'category'];

    public function projectBlocks()
    {
        return $this->hasMany(ProjectBlock::class);
    }
}