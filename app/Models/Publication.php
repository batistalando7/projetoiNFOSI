<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use softDeletes;
    protected $fillable = [
        'title',
        'file',
        'cover',
        'date',
    ];
}
