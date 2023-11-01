<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'victories',
        'draws',
        'losses',
        'age',
        'weight',
        'height',
        'octagon_debut',
        'reach',
        'leg_reach',
        'impressive_stat',
        'accuracy',
        'attempts',
        'connected_per_min',
        'absorbed_per_min',
        'grappling_accuracy',
        'average_takedowns',
        'takedown_defense',
        'average_submissions',
        'ufc_records',
        'win_streak',
        'wins_by_ko',
        'wins_by_sub',
    ];
}
