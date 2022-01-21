<?php declare(strict_types=1);

namespace App;

class SettingsResolver
{
    const ENV_SETTINGS_FILEPATH = 'APP_SETTINGS';

    public static function getFilepath(string $projectRoot): ?string
    {
        $filepath = getenv(self::ENV_SETTINGS_FILEPATH) ?: null;
        if ($filepath) {
            return $filepath;
        }

        $paths = [
            '/settings.yaml',
            '/settings.yaml.dist',
        ];
        foreach ($paths as $filepath) {
            $filepath = $projectRoot . $filepath;
            if (file_exists($filepath)) {
                return $filepath;
            }
        }

        return null;
    }
}