<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JiroInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'jiroinfo';

    protected $fillable = [
        'name',
        'contact',
        'address'
    ];
}
