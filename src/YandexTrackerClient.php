<?php

namespace YandexTrackerApi\YandexTrackerApi;

use Psr\Log\LoggerInterface;
use YandexTrackerApi\YandexTrackerApi\Configuration\ConfigurationInterface;

class YandexTrackerClient
{
    /**
     * Json Mapper.
     */
    protected \JsonMapper $json_mapper;

    /**
     * Yandex Tracker REST API URI.
     */
    private string $api_uri = 'https://api.tracker.yandex.net';

    /**
     * Guzzle instance.
     */
    protected \GuzzleHttp\Client $guzzle;

    /**
     * Monolog instance.
     */
    protected LoggerInterface $log;

    /**
     * Yandex Tracker REST API Configuration.
     */
    protected ConfigurationInterface $configuration;

    /**
     * json en/decode options.
     */
    protected int $jsonOptions;

    public function __construct(ConfigurationInterface $configuration = null, LoggerInterface $logger = null, string $path = './')
    {

    }

}