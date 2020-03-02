<?php declare(strict_types=1);

namespace DavegTheMighty\Astro;

use DavegTheMighty\Astro\Star;
use DavegTheMighty\Astro\AstronomicalUnit;

final class Orbit
{
    private $star;
    private $au;

    public function __construct(Star $star, AstronomicalUnit $au)
    {
        $this->star = $star;
        $this->au = $au;
    }

    public function getStar(): Star
    {
        return $this->star;
    }

    public function getDistance() : AstronomicalUnit
    {
        return $this->au;
    }
}
