<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'fight_title',
        'main_fighter_id',
        'secondary_fighter_id',
        'result_type_id',
        'winner_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function mainFighter()
    {
        return $this->belongsTo(Athlete::class, 'main_fighter_id');
    }

    public function secondaryFighter()
    {
        return $this->belongsTo(Athlete::class, 'secondary_fighter_id');
    }

    public function resultType()
    {
        return $this->belongsTo(FightResultType::class, 'result_type_id');
    }

    public function winner()
    {
        return $this->belongsTo(Athlete::class, 'winner_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
