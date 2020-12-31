<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tikkie extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'amount',
        'user_id',
        'description',
        'receiver'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
