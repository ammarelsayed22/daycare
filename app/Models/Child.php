<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Child extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'image',
        'daycare_id',
        'dad_id',
        'teacher_id',
        'classroom_id',
    ];

    public function daycare()
    {
        return $this->belongsTo(Daycare::class);
    }

    public function dad()
    {
        return $this->belongsTo(Dad::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
