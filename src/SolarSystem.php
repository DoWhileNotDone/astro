<?php declare(strict_types=1);

namespace DavegTheMighty\Astro;

use DavegTheMighty\Astro\Star;

final class SolarSystem
{
    /**
     * @var Star
     */
    private $star;

    /**
     * @param Star $star
     */
    public function __construct(Star $star)
    {
        $this->star = $star;
    }

    /**
     * @return Star
     */
    public function getStar() : Star
    {
        return $this->star;
    }
}
