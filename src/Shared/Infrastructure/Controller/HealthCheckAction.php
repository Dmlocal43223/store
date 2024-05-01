<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/health-check', name: 'healthCheck', methods: ['GET'])]
class HealthCheckAction
{
    public function __invoke(): Response
    {
        Return new JsonResponse(['status' => 'ok']);
    }
}