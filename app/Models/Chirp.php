<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
    ];

    //留言屬於某一個使用者
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
