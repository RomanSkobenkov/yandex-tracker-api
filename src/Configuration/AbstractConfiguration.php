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

    public function getOAuthAccessToken(): string
    {
        return $this->oauthAccessToken;
    }

    public function getCompanyId(): string
    {
        return $this->companyId;
    }
}