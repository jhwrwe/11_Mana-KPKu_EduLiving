<?php

namespace Database\Seeders;
use App\Models\Animal;
use App\Models\Species;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Menentukan referensi ke spesies
        
        Animal::create([
            'animal_name' => 'Tiger',
            'image' => 'tiger.jpg',
            'latin_name' => 'Panthera tigris',
            'species_id' => 1, // ID spesies Mamalia
            'habitat' => 'Forests and grasslands',
            'continent' => 'Asia',
            'description' => 'The tiger is the largest cat species and a member of the genus Panthera. It is most recognisable for its dark vertical stripes on orange-brown fur with a lighter underside.'
        ]);
        
        Animal::create([
            'animal_name' => 'Hawk',
            'image' => 'hawk.jpg',
            'latin_name' => 'Buteo buteo',
            'species_id' => 2, // ID spesies Aves
            'habitat' => 'Forests, grasslands, and urban areas',
            'continent' => 'Worldwide',
            'description' => 'The hawk is a bird of prey noted for its broad, rounded wings and a long tail, typically hunting small mammals and birds.'
        ]);
        
        Animal::create([
            'animal_name' => 'Salmon',
            'image' => 'salmon.jpg',
            'latin_name' => 'Salmo salar',
            'species_id' => 3, // ID spesies Pisces
            'habitat' => 'Freshwater and saltwater',
            'continent' => 'North America and Europe',
            'description' => 'The salmon is a fish species that migrates from freshwater to the ocean and back again to spawn. It is an important food source for humans and wildlife.'
        ]);
        
        Animal::create([
            'animal_name' => 'Python',
            'image' => 'python.jpg',
            'latin_name' => 'Pythonidae',
            'species_id' => 4, // ID spesies Reptilia
            'habitat' => 'Forests, grasslands, and deserts',
            'continent' => 'Africa, Asia, and Australia',
            'description' => 'The python is a large snake species known for its nonvenomous constricting method of prey capture. They are found in a variety of habitats across the world.'
        ]);
        
        Animal::create([
            'animal_name' => 'Elephant',
            'image' => 'elephant.jpg',
            'latin_name' => 'Loxodonta africana',
            'species_id' => 1, // ID spesies Mamalia
            'habitat' => 'Forests, savannas, and deserts',
            'continent' => 'Africa and Asia',
            'description' => 'The elephant is the largest land animal, characterized by its long trunk, large ears, and tusks. They play a crucial role in their ecosystems and are revered in many cultures.'
        ]);
        
        // Tambahkan 3 data hewan lagi dengan atribut yang berbeda
        
    }
}
