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
}