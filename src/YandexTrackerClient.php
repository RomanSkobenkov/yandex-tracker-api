<?php

namespace YandexTrackerApi\YandexTrackerApi;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
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
    private string $api_uri = 'https://api.tracker.yandex.net/v2';

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

    /**
     * Execute REST request.
     *
     * @param string $context Rest API context (ex.:issue, search, etc..)
     * @param array|string|null $post_data
     * @param string $method
     * @return string|bool
     * @throws GuzzleException
     */
    public function exec(string $context, array|string $post_data = null, string $method = 'GET'): string|bool
    {
        $response = $this->guzzle->request($method, $this->api_uri . $context, [
            'headers' => [
                'Authorization'     => $this->configuration->getOAuthAccessToken(),
                'X-Org-ID'      => $this->configuration->getCompanyId(),
            ]
        ]);

        return $response->getBody()->getContents();
    }

    /**
     * convert to query array to http query parameter.
     */
    public function toHttpQueryParameter(array $paramArray): string
    {
        $queryParam = '?';

        foreach ($paramArray as $key => $value) {
            $v = null;

            // some param field(Ex: expand) type is array.
            if (is_array($value)) {
                $v = implode(',', $value);
            } else {
                $v = $value;
            }

            $queryParam .= rawurlencode($key).'='.rawurlencode($v).'&';
        }

        return $queryParam;
    }

}