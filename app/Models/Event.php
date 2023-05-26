<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Event extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
     protected $fillable = ['daycare_id', 'day', 'month', 'time', 'subject'];

    public function daycare()
    {
        return $this->belongsTo(Daycare::class);
    }
}
