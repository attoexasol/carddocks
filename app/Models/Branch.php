<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Branch extends Model
{
    use HasFactory, softDeletes;
    Protected $table = 'branches';
    protected $guarded = [];

}
