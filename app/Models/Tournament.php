<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_name',
        'start_date',
        'end_date',
        'game_mode',
        'map_id',
        'status',
        'prize_pool',
        'operator_id',
    ];

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    public function map()
    {
        return $this->belongsTo(Map::class);
    }
}
