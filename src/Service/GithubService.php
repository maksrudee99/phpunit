<?php

namespace App\Service;

use App\Enum\HealthStatus;

class GithubService
{

    public function getHealthReport(string $dinosaurName): HealthStatus
    {
        return HealthStatus::HEALTHY;
    }
}