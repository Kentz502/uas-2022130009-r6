<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tounament extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'duration',
        'team_a_score',
        'team_b_score',
    ];
}