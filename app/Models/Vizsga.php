<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vizsga extends Model
{
    use HasFactory;

    protected $fillable = ['targy','tipus','kezdes'];

    protected $visible = ['id','targy','tipus','kezdes'];
}
