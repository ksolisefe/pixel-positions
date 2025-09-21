<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['employer_id', 'title', 'salary'];
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
