<?php declare(strict_types=1);

namespace DavegTheMighty\Astro\Test\Unit;

use DavegTheMighty\Astro\SolarSystem;
use DavegTheMighty\Astro\Star;

use PHPUnit\Framework\TestCase;

final class SolarSystemTest extends TestCase
{
    public function testTheSolarSystemHasOneStar() : void
    {
        $star = new Star('Sun');
        $solar_system = new SolarSystem($star);
        $this->assertEquals($star, $solar_system->getStar());
    }
}
