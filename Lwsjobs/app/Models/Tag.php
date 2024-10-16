<?php

namespace Modules\Lwsjobs\Models;

use Modules\Lwsjobs\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Lwsjobs\Database\Factories\TagFactory;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
