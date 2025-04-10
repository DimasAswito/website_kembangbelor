<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_event';

    protected $fillable = [
        'title', 
        'description', 
        'location', 
        'posterImage', 
        'isOpen', 
        'event_started', 
        'event_ended'
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'location');
    }

    public function getPosterUrlAttribute()
    {
    return $this->posterImage
        ? Storage::url($this->posterImage)
        : asset('img/Logo.jpg');
    }
}