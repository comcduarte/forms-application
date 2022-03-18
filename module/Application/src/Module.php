<?php

declare(strict_types=1);

namespace Application;

class Module
{
    const TITLE = "Forms";
    const VERSION = "v1.0.0";
    
    public function getConfig(): array
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/module.config.php';
        return $config;
    }
}
