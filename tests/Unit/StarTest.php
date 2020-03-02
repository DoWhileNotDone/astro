<?php declare(strict_types=1);

namespace DavegTheMighty\Astro\Test\Unit;

use DavegTheMighty\Astro\Star;
use DavegTheMighty\Astro\Body;
use DavegTheMighty\Astro\NamedInterface;

use PHPUnit\Framework\TestCase;

final class StarTest extends TestCase
{
    public function testAStarIsABody() : void
    {
        $star = new Star('Sun');
        $this->assertInstanceOf(Body::class, $star);
    }

    public function testAStarHasAName() : void
    {
        $star = new Star('Sun');
        $this->assertEquals($star->getName(), 'Sun');
        $this->assertInstanceOf(NamedInterface::class, $star);
    }
}
