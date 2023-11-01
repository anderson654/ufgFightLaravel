<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FightResultType extends Model
{
    use HasFactory;
    protected $fillable = [
        'result_name',
    ];

    // Relacionamento com a tabela 'fights'
    public function fights()
    {
        return $this->hasMany(Fight::class, 'result_type_id');
    }
}
