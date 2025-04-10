<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has;

class Fasilitas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_fasilitas';

    protected $fillable = [
        'id_wisata',
        'facilityName',
        'facilityPicture',
    ];
    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata');
    }

    public function getFacilityUrlAttribute()
    {
        return $this->facilityPicture
            ? Storage::url($this->facilityPicture)
            : asset('img/Logo.jpg');
    }
}