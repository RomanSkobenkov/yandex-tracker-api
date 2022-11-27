<?php

namespace YandexTrackerApi\YandexTrackerApi;

use GuzzleHttp\Client as GuzzleClient;
use Psr\Log\LoggerInterface;
use YandexTrackerApi\YandexTrackerApi\Configuration\ConfigurationInterface;
use YandexTrackerApi\YandexTrackerApi\Configuration\DotEnvConfiguration;

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
        if ($configuration === null) {
            if (!file_exists($path.'.env')) {
                // If calling the getcwd() on laravel it will return the 'public' directory.
                $path = '../';
            }
            $this->configuration = new DotEnvConfiguration($path);
        } else {
            $this->configuration = $configuration;
        }

        $this->json_mapper = new \JsonMapper();

        // TODO: logger бы завести

        // TODO: Guzzle prepare
        $this->guzzle = new GuzzleClient(['base_uri' => $this->api_uri]);

        $this->jsonOptions = JSON_UNESCAPED_UNICODE;


    }

}