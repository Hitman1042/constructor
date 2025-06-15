<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectBlock extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'block_id', 'content', 'styles', 'position'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function block()
    {
        return $this->belongsTo(Block::class);
    }
}