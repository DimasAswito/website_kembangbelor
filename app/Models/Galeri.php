<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has;

class Galeri extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_galeri';

    protected $fillable = [
        'wisataName', // id_wisata
        'photoGaleri',
        'caption',
        'name_uploader',
    ];
    
    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'wisataName');
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photoGaleri
            ? Storage::url($this->photoGaleri)
            : asset('img/Logo.jpg');
    }
}