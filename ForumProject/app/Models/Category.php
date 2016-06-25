<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [    ];
}