<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class KritikSaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kritikSaran';
    protected $fillable = [
        'name',
        'email',
        'tujuan', // id_wisata
        'pesan',
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'tujuan');
    }
}