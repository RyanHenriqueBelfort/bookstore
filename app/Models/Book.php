<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['author_id', 'gender_id', 'publisher_id', 'title', 'release_year'];

    public function parents() {
        return $this->belongsTo(['App\Models\Author', 'App\Models\Publisher', 'App\Models\Gender']);
    }
}
