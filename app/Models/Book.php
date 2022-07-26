<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function parents(){
        return $this->belongsTo(['App\Models\Author', 'App\Models\Publisher', 'App\Models\Gender']);
    }
}
