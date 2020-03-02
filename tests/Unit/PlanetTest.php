<?php declare(strict_types=1);

namespace DavegTheMighty\Astro\Test\Unit;

use DavegTheMighty\Astro\Planet;
use DavegTheMighty\Astro\Body;
use DavegTheMighty\Astro\NamedInterface;

use PHPUnit\Framework\TestCase;

final class PlanetTest extends TestCase
{

    private $planet;

    public function setUp() : void
    {
        $solar_system = new SolarSystem(new Star('Sun'));
        $this->planet = new Planet('Mercury', new Orbit($solar_system->getStar(), 0.2));
    }

    public function testAPlanetIsABody() : void
    {
        $this->assertInstanceOf(Body::class, $this->planet);
    }

    public function testAPlanetHasAName() : void
    {
        $this->assertEquals($this->planet->getName(), 'Mercury');
        $this->assertInstanceOf(NamedInterface::class, $this->planet);
    }

    public function testAPlanetOrbitsAStar() : void
    {
        $this->assertEquals($this->planet->getOrbit(), true);
    }
}
