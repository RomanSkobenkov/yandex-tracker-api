<?php

namespace YandexTrackerApi\YandexTrackerApi\Configuration;

class DotEnvConfiguration extends AbstractConfiguration
{
    /**
     * @param string $path
     */
    public function __construct(string $path = '.')
    {
        $this->loadDotEnv($path);

        $this->oauthAccessToken = 'OAuth ' . $this->env('YANDEX_TRACKER_OAUTH');
        $this->companyId = $this->env('YANDEX_TRACKER_COMPANY_ID');
    }

    /**
     * Gets the value of an environment variable. Supports boolean, empty and null.
     */
    private function env(string $key, mixed $default = null): mixed
    {
        $value = $_ENV[$key] ?? null;

        if ($value === null) {
            return $default;
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;

            case 'false':
            case '(false)':
                return false;

            case 'empty':
            case '(empty)':
                return '';

            case 'null':
            case '(null)':
                return null;
        }

        if ($this->startsWith($value, '"') && $this->endsWith($value, '"')) {
            return substr($value, 1, -1);
        }

        return $value;
    }

    /**
     * Determine if a given string starts with a given substring.
     */
    public function startsWith(string $haystack, array|string $needles): bool
    {
        foreach ((array)$needles as $needle) {
            if ($needle != '' && str_starts_with($haystack, $needle)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string ends with a given substring.
     */
    public function endsWith(string $haystack, array|string $needles): bool
    {
        foreach ((array)$needles as $needle) {
            if ((string)$needle === substr($haystack, -strlen($needle))) {
                return true;
            }
        }

        return false;
    }

    /**
     * load dotenv.
     */
    private function loadDotEnv(string $path)
    {
        $requireParam = [
            'YANDEX_TRACKER_OAUTH', 'YANDEX_TRACKER_COMPANY_ID',
        ];

        // support for dotenv 1.x and 2.x. see also https://github.com/lesstif/php-jira-rest-client/issues/102
        //if (method_exists('\Dotenv\Dotenv', 'createImmutable')) {    // v4 or above
        $dotenv = \Dotenv\Dotenv::createImmutable($path);

        $dotenv->safeLoad();
        $dotenv->required($requireParam);
        //}
    }
}