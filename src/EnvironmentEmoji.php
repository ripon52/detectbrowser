<?php

namespace BrowserDetect;

class EnvironmentEmoji
{
    public static function get(string $env = null): string
    {
        $env = $env ?? app()->environment();

        return match (strtolower($env)) {
            'local', 'dev', 'development' => '🛠️',
            'staging', 'stage' => '🧪',
            'uat' => '👥',
            'production', 'prod' => '🚀',
            default => '❓',
        };
    }
}
