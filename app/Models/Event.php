<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'local_id',
        'organizer_id',
        'start_date',
        'end_date',
    ];

    public function local()
    {
        return $this->belongsTo(Address::class, 'local_id');
    }

    public function organizer()
    {
        return $this->belongsTo(Organizer::class, 'organizer_id');
    }

    public function fights()
    {
        return $this->hasMany(Fight::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
