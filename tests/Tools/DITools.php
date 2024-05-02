<?php

declare(strict_types=1);

namespace App\Tests\Tools;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

trait DITools
{
    public function getService(string $service)
    {
        return static::getContainer()->get($service);
    }

    public function getUrlGenerator(): UrlGeneratorInterface
    {
        return $this->getService(UrlGeneratorInterface::class);
    }
}