<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'see'
    ];

    public function group(){
        return $this->belongsTo(User::class, 'sender_id', 'id');
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }
}
