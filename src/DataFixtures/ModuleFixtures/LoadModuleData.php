<?php

namespace App\DataFixtures\ModuleFixtures;

use App\DataFixtures\MaderaFixtures;
use App\DataFixtures\RangeFixtures\LoadRangeData;
use App\Entity\Module\Module;
use Doctrine\Common\Persistence\ObjectManager;

class LoadModuleData extends MaderaFixtures{

    const MURS_DROIT_PREMIUM = 'module-mur-droit-premium';
    const MURS_DROIT_CLASSIC = 'module-mur-droit-classic';
    const MURS_ANGLE = 'module-mur-angle';
    const PLANCHER_TEK = 'module-plancher-tek';
    const PLANCHER_CHENE = 'module-plancher-chene';

    public function load(ObjectManager $manager) {
        $mursDroit = new Module();
        $mursDroit->setLabel('Mur droit premium')
            ->setDiscount(0)
            ->setLength(4)
            ->setHeight(2.5)
            ->setModuleWoodenFramework($this->getReference(LoadModuleWoodenFrameworkTypeData::SANS_ANGLE))
            ->setModuleNature($this->getReference(LoadModuleNatureData::MURS_EXTERIEURS))
            ->setModuleRange($this->getReference(LoadRangeData::PREMIUM));
        $manager ->persist($mursDroit);
        $this->addReference(LoadModuleData::MURS_DROIT_PREMIUM, $mursDroit);

        $mursDroit2 = new Module();
        $mursDroit2->setLabel('Mur droit classic')
            ->setDiscount(0)
            ->setLength(0)
            ->setHeight(2.5)
            ->setModuleWoodenFramework($this->getReference(LoadModuleWoodenFrameworkTypeData::SANS_ANGLE))
            ->setModuleNature($this->getReference(LoadModuleNatureData::MURS_EXTERIEURS))
            ->setModuleRange($this->getReference(LoadRangeData::CLASSIC));
        $manager ->persist($mursDroit2);
        $this->addReference(LoadModuleData::MURS_DROIT_CLASSIC, $mursDroit2);


        $mursAngle = new Module();
        $mursAngle->setLabel('Mur droit')
            ->setDiscount(0)
            ->setLength(5)
            ->setHeight(2.5)
            ->setModuleWoodenFramework($this->getReference(LoadModuleWoodenFrameworkTypeData::ANGLE_FERMANT))
            ->setModuleNature($this->getReference(LoadModuleNatureData::MURS_EXTERIEURS))
            ->setModuleRange($this->getReference(LoadRangeData::PREMIUM));
        $manager ->persist($mursAngle);
        $this->addReference(LoadModuleData::MURS_ANGLE, $mursAngle);


        $plancherChene = new Module();
        $plancherChene->setLabel('Plancher Chêne')
                  ->setDiscount(0.10)
                  ->setLength(3)
                  ->setHeight(0.50)
            ->setModuleWoodenFramework($this->getReference(LoadModuleWoodenFrameworkTypeData::ANGLE_FERMANT))
            ->setModuleNature($this->getReference(LoadModuleNatureData::PLANCHER_DALLE))
            ->setModuleRange($this->getReference(LoadRangeData::PREMIUM));
        $manager ->persist($plancherChene);
        $this->addReference(LoadModuleData::PLANCHER_CHENE, $plancherChene);

        $plancherTek = new Module();
        $plancherTek->setLabel('Plancher Teck')
            ->setDiscount(0.10)
            ->setLength(2)
            ->setHeight(0.70)
            ->setModuleWoodenFramework($this->getReference(LoadModuleWoodenFrameworkTypeData::ANGLE_FERMANT))
            ->setModuleNature($this->getReference(LoadModuleNatureData::PLANCHER_DALLE))
            ->setModuleRange($this->getReference(LoadRangeData::PREMIUM));
        $manager ->persist($plancherTek);
        $this->addReference(LoadModuleData::PLANCHER_TEK, $plancherTek);

        $manager->flush();

    }


    public function getOrder() {
        return MaderaFixtures::MODULE;
    }
}