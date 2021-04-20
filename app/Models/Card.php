<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable=[
        'card_number',
        'expire_date',
        'ccv',
        'card_type',
        'amount',
        'status',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
