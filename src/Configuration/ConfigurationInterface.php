<?php

namespace YandexTrackerApi\YandexTrackerApi\Configuration;

/**
 * Interface ConfigurationInterface.
 */
interface ConfigurationInterface
{
    /**
     * HTTP header 'Authorization: OAuth {token}'
     */
    public function getOAuthAccessToken(): ?string;

    /**
     * HTTP header 'X-Org-ID: {company_id}'
     */
    public function getCompanyId(): ?string;

    /**
     * Enabled write to log.
     */
    public function getYandexTrackerLogEnabled(): bool;

    /**
     * Path to log file.
     */
    public function getYandexTrackerLogFile(): string;

    /**
     * Log level (DEBUG, INFO, ERROR, WARNING).
     */
    public function getYandexTrackerLogLevel(): string;
}