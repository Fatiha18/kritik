<?php

namespace App\DataFixtures;

use App\Entity\Label;

class LabelFixture extends BaseFixture
{
    protected function loadData()
    {
        //Créer 10 labels
        $this->createMany(10, 'label',function (){
           return (new Label())
            ->setName($this->faker->name);
            
        
        });
    }


}