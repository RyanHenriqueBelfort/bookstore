<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    // protected $hidden = [
    //     'gender'
    // ];S

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'year_birth', 'gender', 'nationality'];

    public function books(){
        return $this->hasMany('App\models\Book');
    }
}
