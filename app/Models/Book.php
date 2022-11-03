<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'title',
         'author'    ,
         'description',
    ];



//A many-to-one relationship with User model

    public function createdBy(){

    $this->belongsTo(User::class);

    }


}
