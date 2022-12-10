<?php

namespace YandexTrackerApi\YandexTrackerApi\Configuration;

class AbstractConfiguration implements ConfigurationInterface
{
    /**
     * HTTP header 'Authorization: OAuth {token}'
     */
    protected ?string $oauthAccessToken = null;

    /**
     * HTTP header 'X-Org-ID: {company_id}'
     */
    protected ?string $companyId = null;

    protected bool $yandexTrackerLogEnabled;

    protected ?string $yandexTrackerLogFile;

    protected ?string $yandexTrackerLogLevel;

    public function getOAuthAccessToken(): string
    {
        return $this->oauthAccessToken;
    }

    public function getCompanyId(): string
    {
        return $this->companyId;
    }

    public function getYandexTrackerLogEnabled(): bool
    {
        return $this->yandexTrackerLogEnabled;
    }

    public function getYandexTrackerLogFile(): string
    {
        return $this->yandexTrackerLogFile;
    }

    public function getYandexTrackerLogLevel(): string
    {
        return $this->yandexTrackerLogLevel;
    }
}