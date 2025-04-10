<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wisata extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_wisata';

    protected $fillable = [
        'name',
        'desc',
        'htm',
        'imageWisata',
        'whatsapp',
        'maps',
        'timeOpen',
        'timeClose',
        'mapsView',
    ];

    public function getImageUrlAttribute()
{
    return $this->imageWisata
        ? Storage::url($this->imageWisata)
        : asset('img/Logo.jpg');
}
}