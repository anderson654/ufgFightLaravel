<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardDetail extends Model
{
    use HasFactory;
    // Relacionamento com o usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com o gataway
    public function paymentGateway()
    {
        return $this->belongsTo(PaymentGateway::class);
    }
}
