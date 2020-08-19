<?php 

namespace App\DataFixtures;

use App\Entity\Record;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RecordFixtures extends BaseFixture implements DependentFixtureInterface
{
    protected function loadData()
    {
         $this->createMany(100, 'record', function (){
             return (new Record())
             ->setTitle($this->faker->catchPhrase)
             ->setDescription($this->faker->optional()->realText())
             ->setReleasedAt($this->faker->dateTimeBetween('-2 years'))
             ->setArtist($this->getRandomRefence('artist'))

             ;

         });
    }
    public function getDependencies()
    {
        return [

            ArtistFixtures::class
        ];
    }
}