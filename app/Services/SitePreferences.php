<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class SitePreferences
{
    const CACHE_PREFIX = 'site_preferences:';
    const CACHE_TTL = 43200; // 12 horas

    /**
     * Obtener una preferencia del sitio
     */
    public static function get(string $key, $default = null)
    {
        return Cache::get(self::CACHE_PREFIX . $key, $default);
    }

    /**
     * Establecer una preferencia del sitio
     */
    public static function set(string $key, $value): void
    {
        Cache::put(self::CACHE_PREFIX . $key, $value, self::CACHE_TTL);
    }

    /**
     * Eliminar una preferencia del sitio
     */
    public static function forget(string $key): void
    {
        Cache::forget(self::CACHE_PREFIX . $key);
    }
}
