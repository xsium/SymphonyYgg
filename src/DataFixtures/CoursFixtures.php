<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Exemple : Ajouter 10 cours
        for ($i = 1; $i <= 10; $i++) {
            $cours = new Cours();
            $cours->setNom("Cours de programmation $i")
                  ->setDescription("Description du cours de programmation $i. Ce cours couvre les bases et concepts avancés.")
                  ->setDuree(rand(5, 20)); // Durée aléatoire entre 5 et 20 heures

            $manager->persist($cours);
        }

        // Enregistrer toutes les données dans la base
        $manager->flush();
    }
    public static function getGroups(): array
    {
        return ['cours'];
    }
}