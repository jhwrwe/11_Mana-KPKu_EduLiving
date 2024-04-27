<?php

namespace Database\Seeders;
use App\Models\Animal;
use App\Models\Species;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        DB::table('animals')->insert([
            [
                'animal_name' => 'Harimau Sumatera',
                'image' => 'harimau_sumatera.jpg',
                'latin_name' => 'Panthera tigris sumatrae',
                'species_id' => 1,
                'habitat' => 'Hutan Tropis',
                'continent' => 'Asia',
                'description' => 'Harimau Sumatera adalah salah satu subspesies harimau yang habitatnya terutama di pulau Sumatera, Indonesia.'
            ],
            [
                'animal_name' => 'Gajah Sumatera',
                'image' => 'gajah_sumatera.jpg',
                'latin_name' => 'Elephas maximus sumatranus',
                'species_id' => 1,
                'habitat' => 'Hutan Hujan Tropis',
                'continent' => 'Asia',
                'description' => 'Gajah Sumatera adalah salah satu subspesies gajah yang hidup di pulau Sumatera, Indonesia, dan terancam punah karena perburuan dan kerusakan habitat.'
            ],
            [
                'animal_name' => 'Badak Jawa',
                'image' => 'badak_jawa.jpg',
                'latin_name' => 'Rhinoceros sondaicus',
                'species_id' => 1,
                'habitat' => 'Hutan Hujan Tropis',
                'continent' => 'Asia',
                'description' => 'Badak Jawa adalah spesies badak yang ditemukan di pulau Jawa, Indonesia, dan termasuk dalam kategori kritis terancam punah karena perburuan dan hilangnya habitat.'
            ],
            [
                'animal_name' => 'Komodo',
                'image' => 'komodo.jpg',
                'latin_name' => 'Varanus komodoensis',
                'species_id' => 4,
                'habitat' => 'Pulau Kecil di Indonesia',
                'continent' => 'Asia',
                'description' => 'Komodo adalah spesies kadal terbesar yang hidup di Pulau Komodo dan beberapa pulau kecil di sekitarnya, Indonesia. Dikenal sebagai "naga komodo," spesies ini terancam punah karena perburuan dan kerusakan habitat.'
            ],
            [
                'animal_name' => 'Orangutan',
                'image' => 'orangutan.jpg',
                'latin_name' => 'Pongo pygmaeus',
                'species_id' => 1,
                'habitat' => 'Hutan Hujan Tropis',
                'continent' => 'Asia',
                'description' => 'Orangutan adalah primata besar yang endemik di pulau Borneo dan Sumatera, Indonesia. Terancam punah karena perburuan, deforestasi, dan perdagangan ilegal.'
            ],
            [
                'animal_name' => 'Elang Jawa',
                'image' => 'elang_jawa.jpg',
                'latin_name' => 'Nisaetus bartelsi',
                'species_id' => 2,
                'habitat' => 'Hutan Pegunungan',
                'continent' => 'Asia',
                'description' => 'Elang Jawa adalah spesies elang yang ditemukan di pulau Jawa, Indonesia. Terancam punah karena perburuan ilegal dan hilangnya habitat.'
            ],
            [
                'animal_name' => 'Penyu Hijau',
                'image' => 'penyu_hijau.jpg',
                'latin_name' => 'Chelonia mydas',
                'species_id' => 3,
                'habitat' => 'Perairan Tropis dan Subtropis',
                'continent' => 'Asia, Amerika, Eropa, Australia',
                'description' => 'Penyu Hijau adalah spesies penyu laut yang dapat ditemukan di berbagai perairan tropis dan subtropis di seluruh dunia. Di Indonesia, penyu hijau ditemukan di perairan pantai dan pulau-pulau kecil, tetapi populasi mereka terancam oleh penangkapan telur dan hilangnya habitat pesisir.'
            ],
        ]);

    }
}
