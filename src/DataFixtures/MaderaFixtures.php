<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

/**
 * Class MaderaFixtures for all App fixture
 * this class manage the order of fixture generation
 * @package App\DataFixtures
 */
abstract class MaderaFixtures extends Fixture implements OrderedFixtureInterface{

    /*
     * Manage here the entities order
     */

    //COMPONENT PACKAGE
    const COMPONENT_UNIT = 1;
    const COMPONENT_NATURE = MaderaFixtures::COMPONENT_UNIT+1;
    const COMPONENT_PRICE = 1;
    const COMPONENT_QUALITY = 1;
    const COMPONENT = MaderaFixtures::COMPONENT_NATURE
                    + MaderaFixtures::COMPONENT_PRICE
                    + MaderaFixtures::COMPONENT_QUALITY;

    //RANGE PACKAGE
    const RANGE = MaderaFixtures::COMPONENT+1;

    //MODULE PACKAGE
    const MODULE_UNIT = 1;
    const MODULE_WOODEN_FRAMEWORK = 1;
    const MODULE_NATURE = MaderaFixtures::MODULE_UNIT +1;
    const MODULE = MaderaFixtures::RANGE + MaderaFixtures::MODULE_UNIT ;
    const MODULE_STRUCTURE = MaderaFixtures::MODULE + MaderaFixtures::COMPONENT ;

    //ACCOUNTING PACKAGE
    const ACCOUNTING_TVA = 1;
    const ACCOUNTING_MARGIN = 1;
    const ACCOUNTING_VALUE_RATE = MaderaFixtures::ACCOUNTING_MARGIN + 1;

    //ACTOR PACKAGE

    //PROJECT PACKAGE

    //QUOTES PACKAGE
    const QUOTES = MaderaFixtures::ACCOUNTING_TVA + 1;

}
