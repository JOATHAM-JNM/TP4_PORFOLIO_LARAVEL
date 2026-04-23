<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projet;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projets = [
            [
                'titre' => 'GESTION DES POUBELLES INTELLIGENTE',
                'description' => 'Application de gestion des poubelle',
                'image' => 'profile1.png',
                'technologie1' => 'IoT',
                'technologie2' => 'Arduino',
                'technologie3' => 'Mobile',
            ],
            [
                'titre' => 'gestion d\'arrosages automatiques avec une Application',
                'description' => 'Gerer l\'arrosages',
                'image' => 'profile2.png',
                'technologie1' => 'Python',
                'technologie2' => 'Raspberry Pi',
                'technologie3' => 'Web',
            ],
            [
                'titre' => 'Application IoT',
                'description' => 'c\'est une application qui gere les object connecter(IoT)',
                'image' => 'profile3.png',
                'technologie1' => 'Java',
                'technologie2' => 'MQTT',
                'technologie3' => 'Cloud',
            ],
        ];

        foreach ($projets as $projet) {
            Projet::create($projet);
        }
    }
}
