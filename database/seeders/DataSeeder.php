<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wisata;
use App\Models\Event;
use App\Models\Fasilitas;
use App\Models\Galeri;
use App\Models\KritikSaran;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Wisata
        $wisata = Wisata::create([
            'name' => 'Bernah De Valley',
            'desc' => 'Bernah De Valle merupakan tempat wisata yang terletak di Pacet, Mojokerto. Tempat ini menawarkan pemandangan alam yang indah dan berbagai fasilitas untuk bersantai. Disini juga tersedia tempat untuk playground anak-anak, kolam renang, dan area untuk berkemah. Juga terdapat jeep offroad yang bisa disewa untuk menjelajahi area sekitar.',
            'htm' => 7000,
            'imageWisata' => 'wisata/BernahDeVallei.jpg',
            'whatsapp' => '082116848487',
            'maps' => 'https://maps.app.goo.gl/deAMrqya65bMcLGY6',
            'mapsView' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.2835118380517!2d112.5562814750036!3d-7.652633592363648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78770c28200469%3A0x4d3ca4c81c8e5363!2sBernah%20De%20Vallei!5e0!3m2!1sid!2sid!4v1744358700981!5m2!1sid!2sid',
            'timeOpen' => '08:00:00',
            'timeClose' => '16:00:00',
        ]);
        
        Wisata::create([
            'name' => 'Klurak Eco Park',
            'desc' => 'Klurak Eco Park adalah tempat wisata yang terletak di Pacet, Mojokerto. Tempat ini menawarkan pemandangan alam yang indah dan berbagai fasilitas untuk bersantai, kolam renang, dan area untuk berkemah.',
            'htm' => 7000,
            'imageWisata' => 'wisata/KlurakEcoPark.jpg',
            'whatsapp' => '082116848487',
            'maps' => 'https://maps.app.goo.gl/4JXr8QnJ8FW1gr1u9',
            'mapsView' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.2775602416004!2d112.56190828956157!3d-7.664414931341578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877aac58082a9%3A0x85cfe769a5be687!2sKlurak%20Eco%20Park!5e0!3m2!1sid!2sid!4v1744358944771!5m2!1sid!2sid',
            'timeOpen' => '08:00:00',   
            'timeClose' => '16:00:00',
        ]);

        Wisata::create([
            'name' => 'Kedung Klurak',
            'desc' => 'Di Kedung Klurak ini terdapat sebuah sungai yang dapat digunakan untuk berenang serta suasana di sekitar tempat ini sangat sejuk dan asri. Terdapat juga beberapa spot foto yang menarik untuk diabadikan.',
            'htm' => 7000,
            'imageWisata' => 'wisata/KedungKlurak.jpg',
            'whatsapp' => '082116848487',
            'maps' => 'https://maps.app.goo.gl/zoG9vnzszBJZd24h8',
            'mapsView' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2656.8368314221034!2d112.56237357145945!3d-7.662149250702344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877088c1ab589%3A0x4bc374a982803014!2sKedung%20Klurak!5e0!3m2!1sid!2sid!4v1744359286181!5m2!1sid!2sid',
            'timeOpen' => '08:00:00',
            'timeClose' => '16:00:00',
        ]);

        Wisata::create([
            'name' => 'Sekar cafe and eatery',
            'desc' => 'Sekar Cafe and Eatery adalah Cafe yang terletak di Pacet, Mojokerto. Tempat ini menawarkan pemandangan alam yang indah dan Makanan yang lezat. Disini juga tersedia tempat untuk bersantai, Mushola, Live Music, dan spot foto yang menarik.',
            'htm' => 7000,
            'imageWisata' => 'wisata/SekarCafe.png',
            'whatsapp' => '082116848487',
            'maps' => 'https://maps.app.goo.gl/VYLFhWhRRYr6nt9U8',
            'mapsView' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.5089754893525!2d112.55625588778592!3d-7.647112412952533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877004fb9959b%3A0x15ad80cd3326a7a1!2sSekar%20cafe%20and%20eatery!5e0!3m2!1sid!2sid!4v1744359574404!5m2!1sid!2sid',
            'timeOpen' => '09:00:00',
            'timeClose' => '20:00:00',
        ]);    

        // Event
        Event::create([
            'title' => 'Dino Je Lux',
            'description' => 'Pentas Seni yang ada di Bernah De Vallei yang memiliki tema Dinosaurus.',
            'location' => 1,
            'posterImage' => 'event/DinoJeLux.jpg',
            'isOpen' => true,
            'event_started' => '2025-06-01 11:00:00',
            'event_ended' => '2025-06-01 14:00:00',
        ]);

        // Fasilitas
        Fasilitas::create([
            // 'id_wisata' => $wisata->id_wisata,
            'id_wisata' => 1,
            'facilityName' => 'Kolam Renang',
            'facilityPicture' => 'fasilitas/KolamRenangBernah.jpg',
        ]);
        Fasilitas::create([
            'id_wisata' => 1,
            'facilityName' => 'Playground',
            'facilityPicture' => 'fasilitas/PlaygroundBernah.webp',
        ]);
        Fasilitas::create([
            'id_wisata' => 1,
            'facilityName' => 'Camping Ground',
            'facilityPicture' => 'fasilitas/CampingGroundBernah.jpg',
        ]);
        Fasilitas::create([
            'id_wisata' => 1,
            'facilityName' => 'Jeep Offroad',
            'facilityPicture' => 'fasilitas/JeepOffroadBernah.jpg',
        ]);
        Fasilitas::create([
            'id_wisata' => 2,
            'facilityName' => 'Kolam Renang',
            'facilityPicture' => 'fasilitas/KolamRenangKlurak.webp',
        ]);
        Fasilitas::create([
            'id_wisata' => 2,
            'facilityName' => 'Camping Ground',
            'facilityPicture' => 'fasilitas/CampingGroundKlurak.jpg',
        ]);
        Fasilitas::create([
            'id_wisata' => 3,
            'facilityName' => 'Sungai',
            'facilityPicture' => 'fasilitas/SungaiKedung.webp',
        ]);
        Fasilitas::create([
            'id_wisata' => 3,
            'facilityName' => 'pemandangan Alam',
            'facilityPicture' => 'fasilitas/AlamKedung.jpg',
        ]);

        // Galeri
        Galeri::create([
            'wisataName' => 1,
            'photoGaleri' => 'galeri/BernahHijau.jpg',
            'caption' => 'Suasana pagi hari',
            'name_uploader' => 'Aswito',
        ]);
        Galeri::create([
            'wisataName' => 1,
            'photoGaleri' => 'galeri/Dinosaurus.jpg',
            'caption' => 'Seperti kembali Ke masa lalu',
            'name_uploader' => 'Dimas',
        ]);
        Galeri::create([
            'wisataName' => 1,
            'photoGaleri' => 'galeri/Jeep.jpg',
            'caption' => 'Jeep Offroad',
            'name_uploader' => 'Permadani',
        ]);
        Galeri::create([
            'wisataName' => 2,
            'photoGaleri' => 'galeri/Klurak.jpg',
            'caption' => 'Suasana pagi hari',
            'name_uploader' => 'Nensyah',
        ]);
        Galeri::create([
            'wisataName' => 2,
            'photoGaleri' => 'galeri/KlurakMalam.png',
            'caption' => 'Suasana malam hari',
            'name_uploader' => 'Salsabila',
        ]);
        Galeri::create([
            'wisataName' => 2,
            'photoGaleri' => 'galeri/KlurakPagi.jpg',
            'caption' => 'Suasana alam di klurak eco park',
            'name_uploader' => 'Sasqia',
        ]);
        Galeri::create([
            'wisataName' => 3,
            'photoGaleri' => 'galeri/Kedung.jpg',
            'caption' => 'Suasana pagi hari',
            'name_uploader' => 'Rizky',
        ]);
        Galeri::create([
            'wisataName' => 3,
            'photoGaleri' => 'galeri/SungaiKedung.jpg',
            'caption' => 'Suasana Sungai di hari',
            'name_uploader' => 'Lury',
        ]);
        Galeri::create([
            'wisataName' => 3,
            'photoGaleri' => 'galeri/KedungPagi.jpg',
            'caption' => 'Suasana pagi hari',
            'name_uploader' => 'Choirul',
        ]);

        // Kritik dan Saran
        KritikSaran::create([
            'name' => 'Aswito',
            'email' => 'user@example.com',
            'tujuan' => 1,
            'pesan' => 'Tempatnya bagus, cuma kurang tempat sampah.',
        ]);
        KritikSaran::create([
            'name' => 'Dimas',
            'email' => 'user@example.com',
            'tujuan' => 1,
            'pesan' => 'Kurang Tempat duduk kalo pas lagi rame.',
        ]);
        KritikSaran::create([
            'name' => 'Choirul',
            'email' => 'user@example.com',
            'tujuan' => 2,
            'pesan' => 'Jalannya sudah bagus, namun papan masuk nya tidak terlihat.',
        ]);
        KritikSaran::create([
            'name' => 'Salsabila',
            'email' => 'user@example.com',
            'tujuan' => 2,
            'pesan' => 'kolam renangnya terlalu bau obat.',
        ]);
        KritikSaran::create([
            'name' => 'permadani',
            'email' => 'user@example.com',
            'tujuan' => 3,
            'pesan' => 'Tempatnya bagus, cuma kurang tempat sampah.',
        ]);
    }
}