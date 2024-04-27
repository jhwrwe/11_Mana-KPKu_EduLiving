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
        $mamalia = Species::where('species_name', 'Mamalia')->first();
        $aves = Species::where('species_name', 'Aves')->first();
        $pisces = Species::where('species_name', 'Pisces')->first();
        $reptilia = Species::where('species_name', 'Reptilia')->first();

        // Menambahkan data hewan
        Animal::create([
            'animal_name' => 'Lion',
            'image' => 'lion.jpg',
            'latin_name' => 'Panthera leo',
            'species_id' => $mamalia->id,
            'habitat' => 'Grasslands and savannas',
            'continent' => 'Africa',
            'description' => 'The lion is a large carnivorous feline of Africa and northwest India, having a short, tawny coat, a tufted tail, and, in the male, a heavy mane around the neck and shoulders.'
        ]);

        Animal::create([
            'animal_name' => 'Eagle',
            'image' => 'eagle.jpg',
            'latin_name' => 'Aquila chrysaetos',
            'species_id' => $aves->id,
            'habitat' => 'Mountains, forests, and plains',
            'continent' => 'Worldwide',
            'description' => 'The eagle is a large bird of prey with a hooked beak and strong claws, known for its keen eyesight and powerful soaring flight.'
        ]);

        // Tambahkan 5 hewan lagi
        Animal::create([
            'animal_name' => 'Tiger',
            'image' => 'tiger.jpg',
            'latin_name' => 'Panthera tigris',
            'species_id' => $mamalia->id,
            'habitat' => 'Forests and grasslands',
            'continent' => 'Asia',
            'description' => 'The tiger is the largest cat species and a member of the genus Panthera. It is most recognisable for its dark vertical stripes on orange-brown fur with a lighter underside.'
        ]);

        Animal::create([
            'animal_name' => 'Hawk',
            'image' => 'hawk.jpg',
            'latin_name' => 'Buteo buteo',
            'species_id' => $aves->id,
            'habitat' => 'Forests, grasslands, and urban areas',
            'continent' => 'Worldwide',
            'description' => 'The hawk is a bird of prey noted for its broad, rounded wings and a long tail, typically hunting small mammals and birds.'
        ]);

        Animal::create([
            'animal_name' => 'Salmon',
            'image' => 'salmon.jpg',
            'latin_name' => 'Salmo salar',
            'species_id' => $pisces->id,
            'habitat' => 'Freshwater and saltwater',
            'continent' => 'North America and Europe',
            'description' => 'The salmon is a fish species that migrates from freshwater to the ocean and back again to spawn. It is an important food source for humans and wildlife.'
        ]);

        Animal::create([
            'animal_name' => 'Python',
            'image' => 'python.jpg',
            'latin_name' => 'Pythonidae',
            'species_id' => $reptilia->id,
            'habitat' => 'Forests, grasslands, and deserts',
            'continent' => 'Africa, Asia, and Australia',
            'description' => 'The python is a large snake species known for its nonvenomous constricting method of prey capture. They are found in a variety of habitats across the world.'
        ]);

        Animal::create([
            'animal_name' => 'Elephant',
            'image' => 'elephant.jpg',
            'latin_name' => 'Loxodonta africana',
            'species_id' => $mamalia->id,
            'habitat' => 'Forests, savannas, and deserts',
            'continent' => 'Africa and Asia',
            'description' => 'The elephant is the largest land animal, characterized by its long trunk, large ears, and tusks. They play a crucial role in their ecosystems and are revered in many cultures.'
        ]);
    }
}
