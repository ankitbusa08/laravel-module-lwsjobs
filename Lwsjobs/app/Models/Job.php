<?php

namespace Modules\Lwsjobs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Lwsjobs\Database\Factories\JobFactory;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'salary',
        'location',
        'schedule',
        'url',
        'featured'
    ];

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
